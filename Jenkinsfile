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
                bat "C:\\xampp\\php\\php.exe C:\\ProgramData\\ComposerSetup\\bin\\composer.bat require --dev phpunit/phpunit ^9"
            }
        }

        stage('Test') {
            steps {
                echo "Running tests...";
            }
        }

        stage('Deployment') {
            steps {
                echo "Deploying to XAMPP..."
                bat 'php C:\\xampp\\htdocs\\HWE\\deployment_script.php'

            }
        }

    }
}
