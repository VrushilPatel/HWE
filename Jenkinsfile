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
                sh 'composer install'
                sh 'composer require --dev phpunit/phpunit:^10'
                
                }
        }

        
        stage('Test') {
            steps {
                sh 'phpunit --configuration phpunit.xml --testdox DatabaseConnectionTest.php'
            }
        }
    }
}
