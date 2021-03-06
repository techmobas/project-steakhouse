<?php include('default/header.php'); ?>
<style>

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

</style>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                <form action="config/login_config.php" method="post" class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input name="email" type="text" id="form3Example1c" class="form-control" placeholder="Email" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input name="password" type="password" id="form3Example1c" class="form-control" placeholder="Password" required/>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input name="login" type="submit" value="Login" class="btn btn-success btn-lg">
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <p style="color: black;">Belum memiliki Akun, <a href="signup.php">Daftar Sekarang</a></p>
                  </div>

                </form>

                <?php
                  if(isset($_GET["error"])){
                    if ($_GET["error"] == "wrong"){
                      echo '<script type="text/javascript">';
                      echo ' alert("Email atau Password salah")';
                      echo "</script>";
                    }
                    
                    else if ($_GET["error"] == "success"){
                      echo '<script type="text/javascript">';
                      echo ' alert("Pendaftaran berhasil, silahkan Login")';
                      echo "</script>";
                    }
                    else if ($_GET["error"] == "nologin"){
                      echo '<script type="text/javascript">';
                      echo ' alert("Harap Login atau Daftar untuk memulai proses Booking")';
                      echo "</script>";
                    }
                  }
                ?>  

              </div>
          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('default/footer.php'); ?>