
<?php include('default/header.php'); ?>



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 text-left">
                    <h3 class="display-4">MENU CATEGORIES</h2>
                </div>
                <div class="col-12">
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div id="cards_landscape_wrap-2">
            <div class="container-category">
                <div class="row">
                <?php 
                    //Display all the cateories that are active
                    //Sql Query
                    $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                    //Execute the Query
                    $res = mysqli_query($conn, $sql);

                    //Count Rows
                    $count = mysqli_num_rows($res);

                    //CHeck whether categories available or not
                    if($count>0)
                    {
                        //CAtegories Available
                        while($row=mysqli_fetch_assoc($res))
                        {
                            //Get the Values
                            $id = $row['id'];
                            $title = $row['title'];
                            $image_name = $row['image_name'];
                            ?>
                            
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <a href="category-foods.php?category_id=<?php echo $id; ?>">
                                    <div class="card-flyer">
                                        <div class="text-box">
                                            <div class="image-box">
                                            <?php 
                                                if($image_name=="")
                                                {
                                                    //Image not Available
                                                    echo "<div class='error'>Image not found.</div>";
                                                }
                                                else
                                                {
                                                    //Image Available
                                                    ?>
                                                   <img src="images/category/<?php echo $image_name; ?>">
                                                    <?php
                                                }
                                            ?>
                                            <div class="text-container">
                                                <h3><?php echo $title; ?></h3>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <?php
                        }
                    }
                    else
                    {
                        //CAtegories Not Available
                        echo "<div class='error'>Category not found.</div>";
                    }
                
                ?>
            </div>
        </div>
    </div>

    </section>
    
    <!-- Categories Section Ends Here -->
    <link rel="stylesheet" href="css/style.css">
    <script src="JSscript/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>

    <?php include('default/footer.php'); ?>