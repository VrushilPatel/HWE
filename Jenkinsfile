pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                // Checkout the repository
                git url: 'https://github.com/VrushilPatel/HWE.git', branch: 'main'
            }
        }

        stage('Build and Test') {
            steps {
                // Assuming PHP unit tests or any other test runner is available
                sh 'phpunit --configuration phpunit.xml --testdox DatabaseConnectionTest.php'
            }
        }
    }
}
