<?php
include('default/header.php');

$idanchor = $profilerow['id'];
$ordersql= mysqli_query($conn, "SELECT * FROM tbl_order WHERE customer_id='$idanchor'");
$orderrow = mysqli_fetch_array($ordersql);
$orderid = $orderrow['order_id'];

$sql = "DELETE FROM tbl_order WHERE customer_id='$idanchor' ";
$sql2 = "DELETE FROM tbl_order_detail WHERE order_id='$orderid'";

if ($conn->query($sql) &&  $conn->query($sql2) === TRUE) {
    echo "Record deleted successfully";
    echo '<script type="text/javascript">';
    echo ' alert("Anda telah menghapus pesanan!")';
    echo "</script>";
    header('location: index.php');
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();