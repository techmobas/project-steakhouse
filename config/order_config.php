<?php

include('config.php');
if(isset($_POST['food_id'])){
    $customer = $_POST['full_name'];
    $pivot = "SELECT * FROM tbl_customer WHERE full_name='$customer'";
    $query=$conn->query($pivot);
    $idrow=$query->fetch_array();


    $customer_id = $idrow['id'];
    $order_date = $_POST['order_date'];
    $order_time = $_POST['order_time'];
    $quantity_people = $_POST['quantity_people'];
    $sql = "INSERT INTO tbl_order (quantity_people, order_date, order_time, customer_id) VALUES ('$quantity_people', '$order_date', '$order_time', '$customer_id')";
    $conn->query($sql);
	$orderid=$conn->insert_id;
 
	$total=0;

    foreach($_POST['food_id'] as $food){
		$foodinfo=explode("||",$food);
		$foodid=$foodinfo[0];
		$iterate=$foodinfo[1];
		$sql="SELECT * FROM tbl_food WHERE food_id='$foodid'";
		$query=$conn->query($sql);
		$pricerow=$query->fetch_array();

        if (isset($_POST['quantity_'.$iterate])){
			$subt = $pricerow['price'] * $_POST['quantity_'.$iterate];
			$total += $subt;

			$sql = "INSERT INTO tbl_order_detail (order_id, food_id, qty) VALUES ('$orderid', '$foodid', '".$_POST['quantity_'.$iterate]."')";
			$conn->query($sql);
		}
		else {
			die("Error: Something Wrong {$conn->error}");
		}
	}
 		
 		$sql="UPDATE tbl_order SET total='$total' WHERE order_id='$orderid'";
 		$conn->query($sql);
		header('location: ../index.php');		
	}
    else {
		?>
		<script>
			window.alert('Harap periksa kembali pesanan anda dengan teliti.');
			window.location.href='../order.php';
		</script>
		<?php
	}