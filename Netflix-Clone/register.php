<?php
    define("TITLE", "Registration");
    require_once("./includes/config.php");
    require_once("./includes/account.php");
    require_once("./includes/constants.php");
    require_once("./includes/formSanitizer.php");


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    $account = new Account($con);



    if(isset($_POST['submit-btn'])){
        $firstName = FormSanitizer::sanitizeFormString($_POST['firstName']);
        $lastName = FormSanitizer::sanitizeFormString($_POST['lastName']);
        $username = FormSanitizer::sanitizeFormUsername($_POST['username']);
        $email = FormSanitizer::sanitizeFormEmail($_POST['email']);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST['email2']);
        $password = FormSanitizer::sanitizeFormPassword($_POST['password']);
        $password2 = FormSanitizer::sanitizeFormPassword($_POST['password2']);

        $result = $account->register($firstName, $lastName, $username, $email, $email2, $password, $password2);

        if($result){
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php");
        }
        echo $result;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title><?php echo TITLE;?></title>
</head>
<body  style="background: url('./assets/img/netflix-background.jpg') no-repeat center fixed">
    <div class="container">
        <div class="column">
            <span class="iconify" data-icon="logos:netflix" style="float: left;"></span><br><br>
            <h3 style="color: white;">Sign Up</h3><br>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <?php echo $account->getError( Constants::$firstNameCharacters); ?>
                <input type="text" name="firstName" placeholder="First Name" required>
                <?php echo $account->getError( Constants::$lastNameCharacters); ?>
                <input type="text" name="lastName" placeholder="Last Name" required>
                <?php echo $account->getError( Constants::$usernameCharacters); ?> 
                <?php echo $account->getError( Constants::$usernameTaken); ?>    
                <input type="text" name="username" placeholder="Username" required>  
                <?php echo $account->getError( Constants::$emailsDontMatch); ?>
                <?php echo $account->getError( Constants::$emailInvalid); ?> 
                <?php echo $account->getError( Constants::$emailTaken); ?>        
                <input type="text" name="email" placeholder="Email" required>    
                <input type="email" name="email2" placeholder="Confirm Email" required> 
                <?php echo $account->getError( Constants::$passwordsDontMatch); ?>  
                <?php echo $account->getError( Constants::$passwordLength); ?>   
                <input type="password" name="password" id="pass" placeholder="Enter your Password" required>
                <input type="password" name="password2" id="pass2" placeholder="Confirm Password" required>
                <input type="submit" name="submit-btn" class="btn btn-danger" value="Submit"><br>
                <input type="checkbox" id="togglePassword" style="display: flex;">
                <label for="togglePassword" style="color: white;">Show Password</label>

            </form>
            <a href="login.php" class="sign-in-message">You have an account? Log in</a>
        </div>
    </div>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>