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
                echo "Building the application...";
                bat "C:\ProgramData\ComposerSetup\bincomposer require --dev phpuint/phpuint ^10"
                
            }
        }

        stage('Test') {
            steps {
                echo "Running tests...";
                bat "phpunit DatabaseConnectionTest.php"
                
            }
        }

        stage('Deployment') {
            steps {
                echo "Deploying...";
                
            }
        }
    }
}
