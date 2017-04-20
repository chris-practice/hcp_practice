#!/bin/bash

# store the current dir
CUR_DIR=$(pwd)

#Current day

CURRENT_DAY="$(date +'%d-%m-%Y-%H%M%S')"

#Directory to store logs

LOG_DIR="LOG-NAME"

#create directory if not exist

mkdir -p $LOG_DIR

#Start time

START_TIME="$(date +'%d-%m-%Y-%H%M%S')"

echo " " >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt
echo "#################" "Script Started at: " $START_TIME "#################" >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt

# Let the person running the script know what's going on.
echo "################# Pulling in latest changes for all repositories #################" >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt

# Find all git repositories and update it to the master latest revision
for i in $(find . -name ".git" | cut -c 3-); do
    echo " " >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt
	echo " " $i >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt
    

    # We have to go to the .git parent directory to call the pull command
    cd "$i";
    cd ..;

    # finally pull
	# git pull origin master;
    git pull origin >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt;

    # lets get back to the CUR_DIR
    cd $CUR_DIR
done

echo "################# Complete #################" $i >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt

