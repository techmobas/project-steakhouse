<?php include('default/header.php'); ?>

<!-- fOOD sEARCH Section Starts Here -->
<section class="text-center food-search">
    <div class="container">
    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->

<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Profil</h2>
        
        <?php 
            //Display Foods that are Active
            $sql = "SELECT * FROM tbl_customer WHERE email='$userdata'";

            //Execute the Query
            $res=mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
            $name = $row['full_name'];
            $email = $row['email'];
            $phone = $row['phone_number'];
            //Count Rows

            ?>
            <!-- <center> -->
            <form action="" method="POST">
            <table class="tbl-30 mx-auto">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $name; ?>" disabled>
                    </td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $email; ?>" disabled>
                    </td>
                </tr>
                

            </table>
        <br /><br /><br /><br /><br /><br />
        </form>
<!-- </center> -->
            <?php
        ?>

        

        

        <div class="clearfix"></div>

        

    </div>

</section>
<!-- fOOD Menu Section Ends Here -->

<?php include('default/footer.php'); ?>