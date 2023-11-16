pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                // Checkout the repository
                git url: 'https://github.com/VrushilPatel/HWE.git', branch: 'main'
            }
        }

        
        stage('Test') {
            steps {
                sh 'phpunit --configuration DatabaseConnectionTest.php'
            }
        }
    }
}
