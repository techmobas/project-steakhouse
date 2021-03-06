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
                    <h1 class="fw-bold mb-0 text-black">Daftar Makanan</h1>
                  </div>
                <form action="config/order_config.php" method="post">
                <hr class="my-4">
                  <?php
                    $resultname = mysqli_query($conn, "SELECT * FROM tbl_food WHERE category_id ");
                    $iterate = 0;
                      while($namerow = mysqli_fetch_array($resultname)){
                        $foodid = $namerow['food_id'];
                        $title = $namerow['title'];
                        $price = $namerow['price'];
                        $image_name = $namerow['image_name'];
                  ?>
                    <hr class="my-4">
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-1 col-lg-1 col-xl-1">
                        <input type="checkbox" value="<?php echo $foodid; ?>||<?php echo $iterate; ?>" name="food_id[]" style="">
                      </div>
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                          src="images/food/<?php echo $image_name; ?>"
                          class="img-fluid rounded-3">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-black mb-0"><?php echo $title; ?></h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        
                        <input id="form1" min="0" name="quantity_<?php echo $iterate; ?>" value="0" type="number"
                          class="form-control" style="width: 75px;"/>
                        
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">Rp. <?php echo $price; ?></h6>
                      </div>
                    </div>
                  <?php 
                  $iterate++;  
                }  
                  ?>
                  <hr class="my-4">
                  <div class="pt-5">
                    <h6 class="mb-0"><a href="index.php" class="text-body">
                      <i class="fas fa-long-arrow-alt-left me-2"></i>Kembali</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">
                  <h3 class="fw-bold mb-5 mt-2 pt-1">Data Pemesanan/Booking</h3>
                  <hr class="my-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Jumlah Orang</label>
                      <input name="quantity_people" min="0" type="number" id="form3Example1c" class="form-control" placeholder="Jumlah orang" required/>
                      <label for="">Anak diatas 2 tahun, harap dimasukan</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-calendar fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Tanggal Pesan</label>
                      <input name="order_date" type="date" id="form3Example1c" class="form-control" placeholder="" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-clock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Waktu Pesan</label>
                      <input name="order_time" type="time" id="form3Example1c" class="form-control" placeholder="" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Atas nama</label>
                      <input name="full_name" type="text" id="form3Example1c" class="form-control" value="<?php echo $profilerow['full_name']; ?>" readonly/>
                    </div>
                  </div>

                  <hr class="my-4">
                 
                  <!-- <div class="d-flex justify-content-between mb-5">
                    <h5 class="text-uppercase">Total</h5>
                    <h5>IDR 137.00</h5>
                  </div> -->
                  <span style="color:red;">Harap diperiksa kembali sebelum memesan!</span>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4"> 
                    <input type="submit" value="Pesan Sekarang!" class="btn btn-success btn-lg">
                  </div>
                </form>
                
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