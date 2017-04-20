#!/bin/bash

# The script used to clone all repositories of an GitHub organization using git clone --quiet mode and put log in text files

export PATH=$PATH

XAMPP_PATH='D:\XAMPP\htdocs\'


#Current day

CURRENT_DAY="$(date +'%Y-%m-%d')"


#Directory to store logs

LOG_DIR="LOG-NAME"


#create directory if not exist

mkdir -p $LOG_DIR


#Start time

START_TIME="$(date +'%d/%m/%Y %H:%M:%S')"

echo "#################" "Script Started at: " $START_TIME "#################" >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt

echo "#################" "Script Started at: " $START_TIME "#################" >> ${LOG_DIR}/repos_clone_log"-"${CURRENT_DAY}.txt

 

# Github organization to fetch all repositories for

GITHUB_ORGANIZATION="pfizer"

 

# Git clone cmd used for cloning each repository

GIT_CLONE_CMD="git clone --quiet "


# Github account username and token which has access to all repositories

GIT_USER_NAME="dwaghmare"

GIT_USER_TOKEN="62c17e1f7f8251f446a761a3a57e3907c4031739"


# Git credentials url with user-name and token to be used for concatenating part of git_url

GIT_CRED_URL="https://$GIT_USER_NAME:$GIT_USER_TOKEN@"


#Starting Page

PAGE=1

MAX_PAGE=8

RESULTS_PER_PAGE=100


TOTAL_REPO=0


while [ $PAGE -le $MAX_PAGE ]

do


echo "#################" "Page No: " $PAGE "Start #################" >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt

echo "#################" "Page No: " $PAGE "Start #################" >> ${LOG_DIR}/repos_clone_log"-"${CURRENT_DAY}.txt


# fetch repository list via github api by passing access token

# grep fetches the json object key git_url, which contains the git url for the repository

# get comma separated list of git_urls of organization repositories  

REPOLIST=`curl -i --silent "https://api.github.com/orgs/${GITHUB_ORGANIZATION}/repos?access_token=$GIT_USER_TOKEN&page=$PAGE&per_page=$RESULTS_PER_PAGE" -q | grep "\"git_url\"" | awk -F': "' '{print $2}' | sed -e 's/",/,/g'`


# Convert comma separated list of repositories to an array

OIFS=$IFS;

IFS=",";

REPO_ARRAY=($REPOLIST);

IFS=$OIFS;



# loop through array containing repositories array 

for ((i=0; i<${#REPO_ARRAY[@]}; ++i));

do

	#take current date

	CURRENT_TIME="$(date +'%d/%m/%Y %H:%M:%S')"

	

	#split git_url by // i.e. git://github.com/organization/repo-name.git will give github.com/organization/repo-name.git

	GIT_CLONE_URL_PART=${REPO_ARRAY[$i]#*//}

	

	INDEX=$((i + 1))

	#concatenate $GIT_CRED_URL to $GIT_CLONE_URL_PART

	#echo $INDEX "Cloning at: $CURRENT_TIME" $GIT_CRED_URL${GIT_CLONE_URL_PART} >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt	

	

	

	#Find Git repository name from Git clone url

	GIT_CLONE_URL=$GIT_CRED_URL${GIT_CLONE_URL_PART}

	GIT_REPO_NAME=${GIT_CLONE_URL##*/}

	GIT_REPO_FOLDER_NAME=${GIT_REPO_NAME%.git}

	

	#Find if folder with Git repository name exist or not 

	if [ -d "${GIT_REPO_FOLDER_NAME}" ]	

	then

		#If folder with Git repository name exists, then do pull of git repository 

		echo $INDEX "Directory ${GIT_REPO_FOLDER_NAME} exists!" >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt	

		

		####################If Repo Exisit : Update it#################

		cd ${GIT_REPO_FOLDER_NAME}

		${GIT_UPDATE_CMD} $GIT_CRED_URL${GIT_CLONE_URL_PART}
		
		cd ..

		#################################################

	else

		#If folder with Git repository name does not exists, then do fresh clone of repository

		echo $INDEX "Directory ${GIT_REPO_FOLDER_NAME} does not exists." >> ${LOG_DIR}/repos_clone_log"-"${CURRENT_DAY}.txt	

		

		#execute git clone cmd for each git_url obtained after concatenating 

		echo $INDEX "Cloning at: $CURRENT_TIME" $GIT_CLONE_CMD $GIT_CRED_URL${GIT_CLONE_URL_PART} >> ${LOG_DIR}/repos_clone_log"-"${CURRENT_DAY}.txt		

		${GIT_CLONE_CMD} $GIT_CRED_URL${GIT_CLONE_URL_PART}

	fi	

	

done



echo "#################" "Page No: " $PAGE "End #################" >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt

echo "#################" "Page No: " $PAGE "End #################" >> ${LOG_DIR}/repos_clone_log"-"${CURRENT_DAY}.txt


TOTAL_REPO=$(($TOTAL_REPO + $INDEX))

(( PAGE++ ))

done


#End time

END_TIME="$(date +'%d/%m/%Y %H:%M:%S')"

echo "Total " $TOTAL_REPO "number of repositories cloned during $START_TIME to $END_TIME"  >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt

echo "Total" $TOTAL_REPO "number of repositories cloned during $START_TIME to $END_TIME"  >> ${LOG_DIR}/repos_clone_log"-"${CURRENT_DAY}.txt

echo "#################" "Script ended at: " $END_TIME "#################" >> ${LOG_DIR}/repos_pull_log"-"${CURRENT_DAY}.txt

echo "#################" "Script ended at: " $END_TIME "#################" >> ${LOG_DIR}/repos_clone_log"-"${CURRENT_DAY}.txt