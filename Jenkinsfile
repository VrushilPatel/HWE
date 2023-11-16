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
                echo "Building the application...\n";
                
            }
        }

        stage('Test') {
            steps {
                echo "Running tests...\n";
                
            }
        }
    }
}
