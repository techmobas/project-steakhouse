<?php include('config/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="css/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3">
    <a class="navbar-brand" href="index.php">Steakhouse</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="categories.php">Menu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="order.php">Reservation</a>
        </li>

        <?php 
            $resultprofile = mysqli_query($conn, "SELECT * FROM tbl_customer");
            $profilerow = mysqli_fetch_array($resultprofile);

            if (isset($_SESSION["userdata"])) { ?>
            <li class="nav-item">
                <a class="nav-link" href="profile.php" style="color: #5d9e5f"><?php echo $profilerow['full_name']; ?></a>
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
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
            <input type="submit" name="submit" value="Search" class="btn btn-danger">
        </form>
        <!-- </div> -->
    </div>
    </nav>
    </body>
    </html>
