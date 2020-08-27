pipeline {
  agent {
    docker {
      image 'node'
    }

  }
  stages {
    stage('Pre Build') {
      parallel {
        stage('Print Info') {
          steps {
            sh '''node --version
ls'''
          }
        }

        stage('Clearing') {
          steps {
            sh '''
            cd themes/${THEME_NAME}/resources
            rm -rf node_modules
            rm -rf dist'''
          }
        }
      }
    }

    stage('Dependencies Installation') {
      steps {
        sh '''
        cd themes/${THEME_NAME}/resources
        npm install'''
      }
    }

    stage('Build') {
      steps {
        sh '''
        cd themes/${THEME_NAME}/resources
        if [ ${BRANCH_NAME} = "master" ] || [ ${BRANCH_NAME} = "qa" ]
        then
        npm run build:dev:progress
        else
        npm run build:dev:progress
        fi'''
      }
    }

    stage('Push to Dest Repo') {
      when {
        anyOf {
          branch 'dev';
          branch 'qa';
          branch 'master';
        }
      }
      steps {
        sh '''
        cd themes/${THEME_NAME}/resources
        ls
        #make sure the repository does have the related branch. you might need to manually create all the branches needed for the jenkins like dev, qa.
        git clone --single-branch --branch ${BRANCH_NAME} https://${DEST_REPO}
        cp -a dist/. ${DEST_PROJECT_NAME}/
        cd ${DEST_PROJECT_NAME}
        git config user.name "${GITHUB_CRED_USR}"
        git config user.email "${GITHUB_USER_EMAIL}"
        git add .
        git diff --quiet && git diff --staged --quiet || git commit -am "adding the build files to the dest repo"
        git push https://${GITHUB_CRED_USR}:${GITHUB_CRED_PSW}@${DEST_REPO}'''

      }
    }

  }
  environment {
    HOME = '.'
    THEME_NAME = 'hamidev-wordpress-100'
    GITHUB_CRED = credentials('github_cred')
    GITHUB_USER_EMAIL = credentials('github_user_email')
    DOMAIN_NAME = credentials('domain_name')
    RUNDECK_INSTANCE_NAME = credentials('rundeck_instance_name')
    RUNDECK_JOB_ID = credentials('angular_deployment_v1_id')
    SRC_PROJECT_NAME = 'hamidev-wordpress-100'
    DEST_PROJECT_NAME = 'hamidev-wordpress-100-dest'
    DEST_REPO = 'github.com/HamidBehnam/hamidev-wordpress-100-dest.git'
    PROJECT_CATEGORY = 'wordpress'
    PROJECT_PATH = '100'
  }
}
