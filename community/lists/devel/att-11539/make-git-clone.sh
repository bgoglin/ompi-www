#!/bin/bash

SVN_URL=https://svn.open-mpi.org/svn/ompi
Project_name=`basename $SVN_URL`
domain_name="open-mpi-git-mirror.example.com"
authors_file=/home/ompi-git/authors.txt
temp_folder_name=/home/ompi-git/new-ompi-git-svn
logfile=/tmp/svn2git.log

# make temp folder
if test -d $temp_folder_name
then
    rm -rf $temp_folder_name
fi
mkdir $temp_folder_name

# Make the svn clone
cd $temp_folder_name
git svn clone $SVN_URL --no-metadata -A $authors_file -t tags -b branches -T trunk . 

# Since the above step takes forever, tar up the result and save it
cd ..
tar jcf 1-right-after-svn-clone.tar.bz2 `basename $temp_folder_name`

cd $temp_folder_name
git fetch . refs/remotes/*:refs/heads/*    #Fetch all branches, tags to local repo

# Save this result, too
cd ..
tar jcf 2-right-after-fetch-refs.tar.bz2 `basename $temp_folder_name`

# This block create tags in new repo
cd $temp_folder_name
for i in `git branch |grep  'tags/'`; do
    tag_shortname=`echo $i|awk -F/ '{print $2}'`
    git tag "$tag_shortname" "$i"
    git branch -D "$i"
done

# Save this result, too
cd ..
tar jcf 3-right-after-tags-and-branches.tar.bz2 `basename $temp_folder_name`

# We only need "master" in the git tree for the SVN trunk
cd $temp_folder_name
git branch -D trunk && git branch -r -d tags/trunk  

# Save this result, too
cd ..
tar jcf 4-right-after-delete-trunk-tag.tar.bz2 `basename $temp_folder_name`

echo all done
exit 0

