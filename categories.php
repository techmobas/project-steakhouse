
<?php include('default/header.php'); ?>



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 text-left">
                    <h3 class="display-4">MENU CATEGORIES</h2>
                </div>
                <div class="col-12">
                    <div class="line"></div>
                </div>
                <div class="col-12 py-1">
                    <h3 class="text-left-categori">STEAK</h3>
                </div>
            </div>
        </div>
        <div class="container container_categori">

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
                    
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3-categori float-container-categori">
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

                                        <img src="images/category/<?php echo $image_name; ?>" class="img-responsive-category img-curve">
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
                    echo "<div class='error'>Makanan yang anda cari tidak ditemukan</div>";
                }
            
            ?>
            

            <div class="clearfix"></div>
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