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
                //bat "C:\\ProgramData\\ComposerSetup\\bin\\composer.bat --dev phpunit/phpunit ^9"
                bat "C:\\xampp\\php\\php.exe C:\\ProgramData\\ComposerSetup\\bin\\composer.bat C:\\xampp\\php\\phpunit.bat remove phpunit/phpunit"
                bat "C:\\xampp\\php\\php.exe C:\\ProgramData\\ComposerSetup\\bin\\composer.bat C:\\xampp\\php\\phpunit.bat --dev phpunit/phpunit ^9"
            }
        }

        stage('Test') {
            steps {
                echo "Running tests...";
                bat "C:\\xampp\\php\\phpunit.bat phpunit DatabaseConnectionTest.php"
            }
        }

        stage('Deployment') {
            steps {
                echo "Deploying to XAMPP...";
                bat 'php deployment_script.php'

            }
        }

    }
}
