<?php
    ob_start(); //output buffer
    session_start();

    date_default_timezone_set("Europe/Berlin");

    try{
        $con = new PDO("mysql:dbname=netflix-clone;host=localhost", "root", "root");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch(PDOException $e){
        exit("Connection failed: ". $e->getMessage());
    }


?>