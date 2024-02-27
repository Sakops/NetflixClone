pipeline {
  
  agent any {
    
    stages {
      
    stage("build"){ 
      
      steps {
        echo 'building application...'
      }
    }
    stages("test") {
      
      steps {
        echo 'testing the application...'
      }
    }
    stages("deploy") {
      
      steps {
        echo 'deploying the application...'
      }
    }  
  }
}
