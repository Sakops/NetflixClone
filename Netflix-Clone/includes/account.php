<?php
    class Account{

        public $con;
        public $errorArray = array();
        
        public function __construct($con)
        {
            $this->con = $con;
        }
        public function register($fn, $ln, $un, $em, $em2, $pw, $pw2){
            $this->validateFirstname($fn);
            $this->validateLastname($ln);
            $this->validateUsername($un);
            $this->validateEmail($em, $em2);
            $this->validatePassword($pw, $pw2);

            if(empty($this->errorArray)){
                return $this->insertUserDetails($fn, $ln, $un, $em, $pw);
            }
            return false;

        }
        public function login($un, $pw){
            $pw = hash("md5", $pw);
            $query = $this->con->prepare("SELECT * FROM users WHERE username=:un AND password=:pw");
            $query->bindValue(":un", $un);
            $query->bindValue(":pw", $pw);
            

            $query->execute();

            if($query->rowCount() == 1){
                return true;
            }
            array_push($this->errorArray, Constants::$loginError);
            return false;
        }
        public function insertUserDetails($fn, $ln, $un, $em, $pw){
            $pw = hash("md5", $pw);
            $query = $this->con->prepare("INSERT INTO users (firstName, lastName, username, email, password)
                            VALUES (:fn, :ln, :un, :em, :pw)");
            $query->bindValue(":fn", $fn);
            $query->bindValue(":ln", $ln);
            $query->bindValue(":un", $un);
            $query->bindValue(":em", $em);
            $query->bindValue(":pw", $pw);

            $query->execute();

        }
        public function validateFirstname($fn){
            if(strlen($fn) < 2 || strlen($fn) > 30){
                array_push($this->errorArray, Constants::$firstNameCharacters);
            }
        }
        public function validateLastname($ln){
            if(strlen($ln) < 2 || strlen($ln) > 30){
                array_push($this->errorArray, Constants::$lastNameCharacters);
            }
        }
        public function validateUsername($un){
            if(strlen($un) < 2 || strlen($un) > 30){
                array_push($this->errorArray, Constants::$usernameCharacters);
                return;
            }
            $query = $this->con->prepare("SELECT * FROM users WHERE username=:un");
            $query->bindValue(":un", $un);
            $query->execute();

            if($query->rowCount() != 0){
                array_push($this->errorArray, Constants::$usernameTaken);
            }
        }
        public function validateEmail($em, $em2){
            if($em != $em2){
                array_push($this->errorArray, Constants::$emailsDontMatch);
            }
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray, Constants::$emailInvalid);
                return;
            }
            $query = $this->con->prepare("SELECT * FROM users WHERE email=:em");
            $query->bindValue(":em",$em);
            $query->execute();

            if($query->rowCount() != 0){
                array_push($this->errorArray, Constants::$emailTaken);
            }
        }
        public function validatePassword($pw, $pw2){
            if($pw != $pw2){
                array_push($this->errorArray, Constants::$passwordsDontMatch);
            }
            if(strlen($pw) < 6 || strlen($pw) > 30){
                array_push($this->errorArray, Constants::$passwordLength);
            }
        }
        public function getError($error){
            if(in_array($error, $this->errorArray)){
                return "<span class='errorMessage'>$error</span>";
            }
        }
        

    }



?>