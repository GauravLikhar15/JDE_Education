<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>JDE | Education Courses</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <script src="http://localhost/19/assets/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="_preload/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="_preload/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="_preload/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="_preload/vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="_preload/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="_preload/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="_preload/css/util.css">
  <link rel="stylesheet" type="text/css" href="_preload/css/main.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .err_s{
      position: absolute;
      z-index: 1000;
      width: 100%;
      margin: 0px auto;
    }
  </style>
</head>

<body>
  <!--Header Start Here-->
  <script>
    $(function () {
      $("#loadheader").load("_preload/_navbar.php");
    });
  </script>
  <div id="loadheader"></div>
  <!-- Header End Here -->

  <main id="main" data-aos="fade-in">
    <div class="breadcrumbs">
      <div class="container">
        <h2>Account Manager</h2>
      </div>
    </div>


    <div class="err_s">
    </div>



    <!-- Login Form Here -->
    <div class="limiter">
      <div class="container-login100" style="background-image: url('_preload/images/4312.png');">
        <div class="wrap-login100 p-t-190 p-b-30">
          <form class="login100-form validate-form" method="POST" action="_preload/php/login_action.php">
            <div class="login100-form-avatar">
              <img src="_preload/images/login.png" alt="Login Here..">
            </div>
            <span class="login100-form-title p-t-20 p-b-45">
              Login Here
            </span>
            <div class="wrap-input100 validate-input m-b-10" data-validate="Username Is Required">
              <input class="input100" type="text" required name="username" placeholder="Username">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user"></i>
              </span>
            </div>
            <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
              <input class="input100" type="password" name="password" required placeholder="Password" autocomplete="true">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock"></i>
              </span>
            </div>

            <div class="container-login100-form-btn p-t-10">
              <button class="login100-form-btn log_btn" type="submit">
                Login
              </button>
            </div>
          </form>


        </div>
      </div>
    </div>
    </section>
  </main>
  <!-- End Main -->

  <!-- Start Footer Here -->
  <script>
    $(function () {
      $("#loadfooter").load("_preload/_footer.html");
    });

    function show_err(){
      let par = document.getElementsByClassName("err_s")[0];
      let chi = document.createElement('div');
      chi.innerHTML = `
      <div class="alert alert-danger alert-dismissible my-2 animate__animated animate__backInUp" role="alert">
          <strong>Sorry !</strong> Wrong Login Credentials
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>`;
      par.appendChild(chi);
    }
  </script>
  <?php
    if(isset($_SESSION['err'])){
        echo "
        <script>
          console.log('ERR')
          show_err();
        </script>";
      }
  ?>

  <div id="loadfooter"></div>
  <!-- End Footer Here -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="_preload/vendor/bootstrap/js/popper.js"></script>
  <script src="_preload/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>