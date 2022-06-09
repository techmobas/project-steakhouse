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
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.gradient-custom-2 {
/* fallback for old browsers */
background: #a1c4fd;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}

.bg-indigo {
background-color: #4835d4;
}
@media (min-width: 992px) {
.card-registration-2 .bg-indigo {
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
}
}
@media (max-width: 991px) {
.card-registration-2 .bg-indigo {
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;
}
}
</style>

<section class="h-100 h-custom gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">Data Pemesanan/Booking</h3>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Jumlah orang</label>
                      <input name="quantity_people" type="number" id="form3Example1c" class="form-control" placeholder="Jumlah orang" required/>
                      <label for="">Anak diatas 9 tahun, harap dimasukan</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Tanggal Pesan</label>
                      <input name="order_date" type="date" id="form3Example1c" class="form-control" placeholder="" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Waktu Pesan</label>
                      <input name="order_date" type="time" id="form3Example1c" class="form-control" placeholder="" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Atas nama</label>
                      <input name="full_name" type="text" id="form3Example1c" class="form-control" value="<?php echo $profilerow['full_name']; ?>" readonly/>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Daftar Makanan</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox image-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ck1a">
                                <label class="custom-control-label" for="ck1a">
                                    <img src="images/burger.jpg" alt="#" class="img-fluid">
                                    <p>Halo <span>RPSDNDSN</span></p>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox image-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ck1b">
                                <label class="custom-control-label" for="ck1b">
                                    <img src="img/luca-bravo.jpg" alt="#" class="img-fluid">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox image-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ck1c">
                                <label class="custom-control-label" for="ck1c">
                                    <img src="img/muneeb-syed.jpg" alt="#" class="img-fluid">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox image-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ck1d">
                                <label class="custom-control-label" for="ck1d">
                                    <img src="img/vladimir-kudinov.jpg" alt="#" class="img-fluid">
                                </label>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <label for="">Sebelum menekan tombol ini harap periksa lagi data pemesanan anda</label>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input name="order" type="submit" value="Pesan Sekarang!" class="btn btn-success btn-lg">
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

<!-- <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color:#5d9e5f">Proses Booking</p>
                <p class="h6 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color:orange    ">Harap isi dengan benar agar mudah kami proses!</p>

                <form action="config/login_config.php" method="post" class="mx-1 mx-md-4">
                
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Jumlah orang</label>
                      <input name="quantity_people" type="number" id="form3Example1c" class="form-control" placeholder="Jumlah orang" required/>
                      <label for="">Anak diatas 9 tahun, harap dimasukan</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Tanggal Pesan</label>
                      <input name="order_date" type="date" id="form3Example1c" class="form-control" placeholder="" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Waktu Pesan</label>
                      <input name="order_date" type="time" id="form3Example1c" class="form-control" placeholder="" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="">Atas nama</label>
                      <input name="full_name" type="text" id="form3Example1c" class="form-control" value="<?php echo $profilerow['full_name']; ?>" readonly/>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <input name="order_time" type="submit" value="Login" class="btn btn-primary btn-lg">
                  </div>


                

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

              </div>
        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
            
        </div>
        </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<?php include('default/footer.php'); ?>