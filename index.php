    <?php include('default/header.php'); ?>

    <!-- <p></p></br>
    <p></p> -->
    <?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>
    <section class="categories">
        <div class="jumbotron pt-6">
            <h1 class="display-4 text-center">Welcome
                
            <?php 
            if (isset($_SESSION["userdata"])) { ?>
                <span style="color:#5d9e5f"><?php echo $profilerow["full_name"]?></span>
            <?php } else { ?>
                <span>Guest</span>
            <?php } ?>

            </h1>
            <p class="lead text-center" style="color : black;">Mari mulai perjalanan anda</p>
            <hr class="my-4">
            <center>
            <?php 
            if (isset($_SESSION["userdata"])) { ?>
                <a class="btn btn-danger btn-lg" href="order.php" role="button">Book a Table Now</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-lg" href="categories.php" role="button">Browse our Foods</a>
            <?php } else { ?>
                <a class="btn btn-danger btn-lg" href="login.php" role="button">Sign In Now</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-lg" href="signup.php" role="button">Create an Account</a>
            <?php } ?>
            </center>
        </div>

        <div class="container">
            <div class="row">
            <div class="col-12 py-5 text-center">
                <h3 class="display-4">TENTANG KAMI</h2>
            </div>
            </div>

            <p style="color:black;">Kami adalah perusahaan Makanan yang berbasis di Jakarta Timur, kami menyediakan berbagai macam makanan Steak mulai dari beef steak, chicken steak, fish steak, pork steak, tempeh steak.</p>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- CAtegories Section Starts Here -->
    <section class="categories">
    <div class="row">
            <div class="col-12 py-5 text-center">
                <h3 class="display-4">TELUSURI MENU KAMI</h2>
            </div>
            </div>
    <div class="container container_categori">
    
<?php 

    //Display all the cateories that are active
    //Sql Query
    $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' ORDER BY id DESC LIMIT 3";
    //Execute the Query
    $res = mysqli_query($conn, $sql);

    //Count Rows
    $count = mysqli_num_rows($res);

    //CHeck whether categories available or not
    if($count>0)
    {
        
        while($row=mysqli_fetch_assoc($res))
        {
            //Get the Values
            $id = $row['id'];
            $title = $row['title'];
            $image_name = $row['image_name'];
            ?>
            
            
            <div class="card" style="width: 25rem; margin: 15px;">
            <img class="card-img-top">
            <?php 
                if($image_name=="")
                {
                    //Image not Available
                    echo "<div class='card-img-top'>Image not found.</div>";
                }
                else
                {
                    //Image Available
                    ?>

                    <img src="images/category/<?php echo $image_name; ?>" class="card-img-top" width="100%">
                    <?php
                }
                    ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $title; ?></h5>
                <a href="category-foods.php?category_id=<?php echo $id; ?> class="btn btn-primary">Telusuri</a>
            </div>
            </div>
            <?php
        }
    }
    else
    {
        //CAtegories Not Available
        echo "<div class='error'>Tidak ditemukan.</div>";
    }

?>


<div class="clearfix"></div>
</div>
      
    </section>
    
    <div class="container">
            <div class="row">
            <div class="col-12 py-5 text-center">
                <h3 class="display-4">Pesan tempat sekarang</h2>
            </div>
            </div>

            <p class="text-center"><a class="btn btn-danger btn-lg" href="order.php" role="button">Book a Table Now</a></p>
            <p>&nsbp;</p>
            <p>&nsbp;</p>
            <p>&nsbp;</p>

            <div class="clearfix"></div>
        </div>

    
    <?php include('default/footer.php'); ?>