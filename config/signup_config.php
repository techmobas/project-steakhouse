<?php

if (isset($_POST["signup"])) {
    $email = $_POST["email"];
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    $password_repeat = $_POST["repeat_password"];
    $phone = $_POST["phone"];

    require_once 'config.php';
    require_once 'function_config.php';

    if (passMatch($password, $password_repeat) !== false){
        header("location: ../signup.php?error=notmatch");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (accExist($conn, $email) !== false){
        header("location: ../signup.php?error=taken");
        exit();
    }

    createUser($conn, $email, $fullname, $password, $phone);
}
else {
    header("location: ../   signup.php");
}

?>