<?php include('core/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food Order</h1>

                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                ?>
                <br><br>

                <table class="tbl-full">
                    <tr>
                        <th width="5%">#</th>
                        <th width="10%">Quantity People</th>
                        <th width="10%">Total</th>
                        <th width="10%">Order Date</th>
                        <th width="10%">Order Time</th>
                        <th width="10%">Customer ID</th>
                        
                    </tr>

                    <?php 
                        //Get all the orders from database
                        $sql = "SELECT * FROM tbl_order ORDER BY order_id DESC"; // DIsplay the Latest Order at First
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count the Rows
                        $count = mysqli_num_rows($res);

                        if($count>0)
                        {
                            //Order Available
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //Get all the order details
                                $id = $row['order_id'];
                                $qty = $row['quantity_people'];
                                $total = $row['total'];
                                $order_date = $row['order_date'];
                                $order_time = $row['order_time'];
                                $customer = $row['customer_id'];

                                
                                ?>

                                    <tr>
                                        <td><?php echo $id; ?> </td>
                                        <td><?php echo $qty; ?></td>
                                        <td><?php echo $total; ?></td>
                                        <td><?php echo $order_date; ?></td>
                                        <td><?php echo $order_time; ?></td>
                                        <td><?php echo $customer; ?></td>
                                 
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //Order not Available
                            echo "<tr><td colspan='12' class='error'>Orders not Available</td></tr>";
                        }
                    ?>

 
                </table>
    </div>
    
</div>