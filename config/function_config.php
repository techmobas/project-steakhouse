<?php 

    function invalidEmail($email){
        // $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function passMatch($password, $password_repeat){
        // $result;
        if($password !== $password_repeat){
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function accExist($conn, $email){
       $sql = "SELECT * FROM tbl_customer WHERE email = ?;";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt, $sql)) {
           header("location: ../signup.php?error=stmtfailed");
           exit();
       }

       mysqli_stmt_bind_param($stmt, "s", $email);
       mysqli_stmt_execute($stmt);

       $resultData = mysqli_stmt_get_result($stmt);
       
       if($row = mysqli_fetch_assoc($resultData)){
        return $row;
       }
       else {
           $result = false;
           return $result;
       }
       mysqli_stmt_close($stmt);
    }

    function createUser($conn, $email, $fullname, $password, $phone){
        $sql = "INSERT INTO tbl_customer (email, full_name, password, phone_number) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $email, $fullname, $hashedPass, $phone);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../login.php?error=success");
        exit();
     }

     function loginUser($conn, $email, $password){
         $userExist = accExist($conn, $email);

        if($userExist === false){
             header("location: ../login.php?error=wrong");
             exit();
        }
        
        $passHash = $userExist["password"];
        $checkPass = password_verify($password, $passHash);

        if($checkPass === false){
            header("location: ../login.php?error=wrong");
            exit();
       }
       else if($checkPass === true){
           session_start();
           $_SESSION["id"] = $userExist["userId"];
           $_SESSION["id"] = $userExist["email"];
           header("location: ../index.php");
           exit();
       }
       
     }