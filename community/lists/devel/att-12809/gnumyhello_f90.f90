!
! Copyright (c) 2004-2006 The Trustees of Indiana University and Indiana
!                         University Research and Technology
!                         Corporation.  All rights reserved.
! Copyright (c) 2004-2005 The Regents of the University of California.
!                         All rights reserved.
! Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
!
! Sample MPI "hello world" application in Fortran 90
!
program main
    use mpi
    implicit none
    integer :: ierr, rank, size

    !integer, parameter :: WRKMEM=1050*10**6
    integer, parameter :: WRKMEM=1070*10**6

    real (kind(0.d0)), allocatable, dimension(:) :: work

    call MPI_INIT(ierr)
    call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
    call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierr)
    print *, "Hello, world, I am ", rank, " of ", size

    allocate(work(WRKMEM),stat=ierr)
    if (ierr .eq. 0) then
       print *, "Task ", rank, " successfully allocated ", &
                    (8.d0*WRKMEM/(1024**3)), "GB"
       deallocate(work)
    else
       print *, "Task ", rank, " failed to allocate ", &
                    (8.d0*WRKMEM/(1024**3)), "GB"
    end if

    call MPI_FINALIZE(ierr)
end

