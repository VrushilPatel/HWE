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
                //bat "C:\\ProgramData\\ComposerSetup\\bin\\composer require --dev phpunit/phpunit ^10"
                bat "C:\\ProgramData\\ComposerSetup\\bin\\composer remove phpunit/phpunit"
                bat "C:\\xampp\\php\\php.exe C:\\ProgramData\\ComposerSetup\\bin\\composer require --dev phpunit/phpunit ^8"
                
            }
        }

        stage('Test') {
            steps {
                echo "Running tests...";
                //bat "phpunit DatabaseConnectionTest.php"
                bat "C:\\xampp\\php\\phpunit.bat DatabaseConnectionTest.php"

                
            }
        }

        stage('Deployment') {
            steps {
                echo "Deploying...";
                
            }
        }
    }
}
