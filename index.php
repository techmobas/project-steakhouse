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
            <h1 class="display-4">Welcome
                
            <?php 
            if (isset($_SESSION["userdata"])) { ?>
                <span style="color:#5d9e5f"><?php echo $profilerow["full_name"]?></span>
            <?php } else { ?>
                <span>Guest</span>
            <?php } ?>

            </h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <?php 
            if (isset($_SESSION["userdata"])) { ?>
                <a class="btn btn-danger btn-lg" href="order.php" role="button">Book a Table Now</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-lg" href="categories.php" role="button">Browse our Foods</a>
            <?php } else { ?>
                <a class="btn btn-danger btn-lg" href="login.php" role="button">Sign In Now</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-lg" href="signup.php" role="button">Create an Account</a>
            <?php } ?>
            
        </div>

        <div class="container">
            <h2 class="text-center">About Us</h2>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea porro est modi,
                 autem quisquam magni quas tempora. Beatae odio inventore velit voluptate, nostrum corrupti at. Accusamus, dicta? Libero, velit est.</p>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Various Food Categories</h2>

            <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' ORDER BY id DESC LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                <h3 class="float-text text-white" ><mark style="background-color:white;"><?php echo $title; ?></mark></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>


            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    
    <?php include('default/footer.php'); ?>