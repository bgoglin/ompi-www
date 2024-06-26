/*
 * Author: 
 * -------
 *	Ananda B Mudar
 * 	Senior Technical Architect
 *	Wipro Technologies
 *	ananda dot mudar at wipro dot com
 *
 * Objective of the program: 
 * -------------------------
 *	Checkpointing the program that has two successive
 * MPI_Bcast() calls will result in the following errors, some times:
 *
 * [Host1:7398] *** An error occurred in MPI_Bcast
 * [Host1:7398] *** on communicator MPI_COMM_WORLD
 * [Host1:7398] *** MPI_ERR_TRUNCATE: message truncated
 * [Host1:7398] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
 *
 * Background:
 * -----------
 * I wrote a similar program in python using mpi4py module and tried to
 * checkpoint the program using ompi-checkpoint. Calling ompi-checkpoint
 * on this program, failed in multiple ways:
 * (a) The program never resumes after the checkpoint image is taken
 * (b) The program used to fail in bcast() with cPickle errors
 *
 * As per mpi4py team, bcast() is implemented with the collective bcast() calls
 * where they call bcast() and broadcast single integer and then call bcast()
 * to broadcast big chunk of memory.
 *
 * This program is an attempt to mimic mpi4py version of bcast() and to
 * reproduce both bcast() failures and the hang.
 * 
 * Pre-Requisites:
 * ---------------
 *	BLCR 0.8.2
 * 	OpenMPI library configured with checkpoint functionality
 *		- Reproducible with any version of OpenMPI 1.4.2, 1.5, trunk
 *	gcc (This is not mandatory but we have used this)
 *
 * Steps to reproduce:
 * -------------------
 * 1. Run this program with mpirun -am ft-enable-cr with atleast two processes
 * 2. While the program is running, run ompi-checkpoint on the pid of mpirun
 * 3. Sometimes, the program moves forward successfully but sometimes, you will
 *    get the error mentioned above.
 *
 */
#include "mpi.h"
#include <stdio.h>
#include <string.h>

int main(int argc, char *argv[])
{
	int myid, numprocs, namelen, number = 0, sleep_time;
	char processor_name[MPI_MAX_PROCESSOR_NAME];
	char buffer[100];
	double start_time = 0.0;

	MPI_Init(&argc, &argv);
	MPI_Comm_size(MPI_COMM_WORLD, &numprocs);
	MPI_Comm_rank(MPI_COMM_WORLD, &myid);
	MPI_Get_processor_name(processor_name, &namelen);

	fprintf(stdout, "Process %d of %d on %s & number = %d\n",
			myid, numprocs, processor_name, number);
	if (myid == 0) {
		number++;
		strcpy(buffer,"Possible b-cast bug initial assignment");
	}

	/*
	 * bcast() is implemented as collective bcast() calls in mpi4py
	 * To mimic this behavior, MPI_Bcast() is called first for an
	 * integer and then for a chunk of memory.
	 */
	MPI_Bcast(&number, 1, MPI_INT, 0, MPI_COMM_WORLD);
	MPI_Bcast(buffer, 100, MPI_CHAR, 0, MPI_COMM_WORLD);
	fprintf(stdout, "Process %d & new_number = %d\n", myid, number);

	if (myid == 0) {
		start_time = MPI_Wtime();
	}

	/*
	 * Infinite while loop; hence MPI_Finalize() is not called.
	 */
	while (1) {
		/*
		 * Wait for atleast 10 seconds before printing the next
		 * set of messages.
		 */
		if (myid == 0) {
			if (MPI_Wtime() - start_time <= 10) {
				sleep_time = 1;
			} else {
				sleep_time = 0;
				start_time = MPI_Wtime();
			}
			strcpy(buffer,"Possible b-cast bug during sleep check");
		}
		/*
		 * bcast() is implemented as collective bcast() calls in mpi4py
		 * To mimic this behavior, MPI_Bcast() is called first for an
		 * integer and then for a chunk of memory.
		 */
		MPI_Bcast(&sleep_time, 1, MPI_INT, 0, MPI_COMM_WORLD);
		MPI_Bcast(buffer, 100, MPI_CHAR, 0, MPI_COMM_WORLD);

		/*
		 * If 10 seconds have elapsed, print the messages
		 */
		if (sleep_time == 0) {
			fprintf(stdout, "Process %d of %d on %s, number =%d\n",
				myid, numprocs, processor_name, number);
			if (myid == 0) {
				number++;
				strcpy(buffer,
				       "Possible b-cast bug after sleep check");
			}
			MPI_Bcast(&number, 1, MPI_INT, 0, MPI_COMM_WORLD);
			MPI_Bcast(buffer, 100, MPI_CHAR, 0, MPI_COMM_WORLD);
			fprintf(stdout,
				"Process %d, buffer = %s, new_number = %d\n", 
				myid, buffer, number);
		}
	}
}
