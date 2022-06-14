<?php 
    include('default/header.php');
    if(!isset($_SESSION['userdata']))  {
        header('location: login.php?error=nologin');
        exit();  
    }   
?>

<style>
  @media (min-width: 1025px) {
  }

  .card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .100em;
  padding-right: .75em;
  }

  .card-registration .select-arrow {
  top: 13px;
  }

  .bg-grey {
  background-color: #eae8e8;
  }

  @media (min-width: 992px) {
  .card-registration-2 .bg-grey {
  border-top-right-radius: 16px;
  border-bottom-right-radius: 16px;
  }
  }

  @media (max-width: 991px) {
  .card-registration-2 .bg-grey {
  border-bottom-left-radius: 16px;
  border-bottom-right-radius: 16px;
  }
  }
</style>
<script>
  
</script>
<section class="h-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0 text-black">E-Recipt</h1>
                  </div>
                
                <hr class="my-4">
                  <?php
                    $idanchor = $profilerow['id'];

                    $ordersql= mysqli_query($conn, "SELECT * FROM tbl_order WHERE customer_id='$idanchor'");
                    $orderrow = mysqli_fetch_array($ordersql);
                    $orderid = $orderrow['order_id'];

                    $order_detailsql = mysqli_query($conn, "SELECT * FROM tbl_order_detail WHERE order_id='$orderid'");
                    while($order_detailrow = mysqli_fetch_array($order_detailsql)){
                        $order_detailid = $order_detailrow['food_id'];
                        $quantity = $order_detailrow['qty'];

                        $foodsql = mysqli_query($conn, "SELECT * FROM tbl_food WHERE food_id='$order_detailid'");
                        while($foodrow = mysqli_fetch_array($foodsql, MYSQLI_ASSOC)){
                            $foodid = $foodrow['food_id'];
                            $title = $foodrow['title'];
                            $price = $foodrow['price'];
                            $image_name = $foodrow['image_name'];
                            
                  ?>
                    <hr class="my-4">
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                          src="images/food/<?php echo $image_name; ?>"
                          class="img-fluid rounded-3">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-black mb-0"><?php echo $title; ?></h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        
                        <h6 class="mb-0"><?php echo $quantity; ?></h6>
                        
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">Rp. <?php echo $price; ?></h6>
                      </div>
                    </div>
                   <?php 
                }
                } ?>     
                  <hr class="my-4">
                  
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">

                  <hr class="my-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Jumlah Orang</label>
                        <h4 class="mb-0"><?php echo $orderrow['quantity_people']; ?> Orang </h4>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Tanggal Pesan</label>
                        <h4 class="mb-0"><?php echo $orderrow['order_date']; ?></h4>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Waktu Pesan</label>
                        <h4 class="mb-0"><?php echo $orderrow['order_time']; ?></h4>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Atas nama</label>
                        <h4 class="mb-0"><?php echo $profilerow['full_name']; ?></h4>
                    </div>
                  </div>

                  <hr class="my-4">
                 
                  <div class="d-flex justify-content-between mb-5">
                    <h3 class="text-uppercase">Total</h3>
                    <h3 class="mb-0">Rp. <?php echo $orderrow['total']; ?></h3>
                  </div>
                  
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <a href = "index.php" class="btn btn-success btn-lg">Kembali</a>&nbsp;&nbsp;&nbsp;
                    <a href = "delete-order.php" class="btn btn-danger btn-lg">Hapus Pesanan</a>
                  </div>
               
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  if(isset($_GET["error"])){
    if ($_GET["error"] == "wrong"){
      echo '<script type="text/javascript">';
      echo ' alert("Incorrect Email or Password!")';
      echo "</script>";
    } 
    else if ($_GET["error"] == "success"){
      echo '<script type="text/javascript">';
      echo ' alert("Sign up success, Now Log in")';
      echo "</script>";
    }
  }
?>  
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
<?php include('default/footer.php'); ?>