<?php include('config/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://kit.fontawesome.com/69ff7f27c9.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 jumbotron">
    <a class="navbar-brand" href="index.php">Steakhouse</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="categories.php">Menu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="order.php">Reservation</a>
        </li>

        <?php
            
            if (isset($_SESSION["userdata"])) { 
                $userdata = $_SESSION['userdata'];
            $resultprofile = mysqli_query($conn, "SELECT * FROM tbl_customer WHERE email='$userdata'");
            $profilerow = mysqli_fetch_array($resultprofile, MYSQLI_ASSOC);
                ?>
            <li class="nav-item">
                <a class="nav-link" href="profile.php" style="color: #5d9e5f">
                <?php
                    // $userdata = $_SESSION['userdata'];
                    // $name = $mysqli_query($conn, "SELECT full_name FROM tbl_customer WHERE email=$userdata");
                    // $whatever_la = mysqli_fetch_array($name);
                    // echo $profilerow['email']; 
                    echo $profilerow['full_name'];
                ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php?id=22" onclick="return confirm('Are you sure?')" style="color: red">Logout</a>
            </li> <?php }
        else { ?>
            <li class="nav-item">
                <a class="nav-link" href="login.php" style="color: #5d9e5f">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php" style="color: orange">Sign Up</a>
            </li> <?php
            } ?>

        </ul>
        <!-- <div class="container"> -->
        <form class="form-inline my-2 my-lg-0" action="food-search.php" method="POST">
            <input name="search" class="form-control mr-sm-2" type="search" placeholder="Cari Makanan" aria-label="Search" required>
            <button type="submit" name="submit" class="btn btn-danger"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <!-- </div> -->
    </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>
    <script src="css/script.js"></script>
</body>
    </html>
