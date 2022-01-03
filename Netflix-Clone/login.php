<?php
    define("TITLE", "Login");
    require_once("./includes/config.php");
    require_once("./includes/account.php");
    require_once("./includes/constants.php");
    require_once("./includes/formSanitizer.php");
    
    $account = new Account($con);


    if(isset($_POST['submit-btn'])){
        $username = FormSanitizer::sanitizeFormUsername($_POST['username']);
        $password = FormSanitizer::sanitizeFormPassword($_POST['password']);
    }
    
    $result = $account->login($username, $password);

    if($result){
        $_SESSION["userLoggedIn"] = $username;
        header("Location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    <title><?php echo TITLE;?></title>
</head>
<body  style="background: url('./assets/img/netflix-background.jpg') no-repeat center fixed">
    <div class="container">
        <div class="column">
            <span class="iconify" data-icon="logos:netflix" style="float: left;"></span><br><br>
            <h3 style="color: white;">Sign In</h3><br>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">  
                <?php echo $account->getError(Constants::$loginError); ?>  
                <input type="text" name="username" placeholder="Username" required>     
                <input type="password" name="password" id="pass" placeholder="Enter your Password" required>
                <input type="submit" name="submit-btn" class="btn btn-danger" value="Submit"><br>
                <input type="checkbox" id="togglePassword" style="display: flex;">
                <label for="togglePassword" style="color: white;">Show Password</label>

            </form>
            <a href="register.php" class="sign-in-message">No account? Register here</a>
        </div>
    </div>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="./assets/js/login.js"></script>
</body>
</html>