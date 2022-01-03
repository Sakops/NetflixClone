<?php

    $display1= ini_set('display_errors', 1);
    $display2= ini_set('display_startup_errors', 1);
    $display3=error_reporting(E_ALL);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errors</title>
</head>
<body>
    <h3 style="color: red;"><?php echo $display1;?></h3>
    <h3 style="color: red;"><?php echo $display2;?></h3>
    <h3 style="color: red;"><?php echo $display3;?></h3>
</body>
</html>