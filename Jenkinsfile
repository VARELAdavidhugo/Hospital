pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }
        stage('Build') {
            steps {
                echo 'Building the project...'
                // Ajoutez ici les étapes pour construire votre application
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying the project...'
                // Ajoutez ici les étapes pour déployer votre application
            }
        }
    }
}
