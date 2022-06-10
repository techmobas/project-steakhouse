<?php

    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        require_once 'config.php';
        require_once 'function_config.php';

        loginUser($conn, $email, $password);
    }

    else{
        header("location: ../login.php");
        exit();
    }