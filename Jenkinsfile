pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                // Checkout the repository
                git url: 'https://github.com/VrushilPatel/HWE.git', branch: 'main'
            }
        }

        stage('Build') {
            steps {
                // Perform build steps here
                // For PHP, you might run commands like composer install or any other necessary build steps
                bat 'C:/ProgramData/Jenkins/.jenkins/workspace/HWE Pipeline/composer install'
            }
        }




    }
}
