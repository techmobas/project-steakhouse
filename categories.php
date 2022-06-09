
<?php include('default/header.php'); ?>



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
        <div class="line"></div>
        <div class="container">
            <h2 class="text-left-categori">Menu Categories</h2>
            <h3 class="text-left-categori">Steak</h3>
        </div>
        <div class="container_categori">

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
                        
                        <a href="category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
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

                                        <img src="images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                        
                                <h3 class="float-text-categori text-white"><?php echo $title; ?></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //CAtegories Not Available
                    echo "<div class='error'>Category not found.</div>";
                }
            
            ?>
            

            <div class="clearfix"></div>
        </div>
    </section>
    
    <!-- Categories Section Ends Here -->
    <script src="JS/script.js"></script>

    <?php include('default/footer.php'); ?>