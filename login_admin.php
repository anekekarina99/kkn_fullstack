<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets_login/fonts/icomoon/style.css">

  <link rel="stylesheet" href="assets_login/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets_login/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="assets_login/css/style.css">

  <title>Login Admin</title>
</head>

<body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('assets_login/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Apakah Anda Admin?, Jika Tidak silahkan kembali</p>
            </div>
            <form action="login.php" method="post" onSubmit="return validasi()">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username">

              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">

              </div>

              <!--  <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>
-->
              <input type="submit" value="Log In" class="btn btn-block btn-primary">

           <!--   <div class="social-login mt-4">
                <a href="login.php" class="facebook btn d-flex justify-content-center align-items-center">
                  <span class=""></span> Login
                </a>
                <a href="#" class="twitter btn d-flex justify-content-center align-items-center">
                  <span class="icon-twitter mr-3"></span> Login with  Twitter
                </a>-->
                <a href="javascript:window.history.go(-1);" class="google btn d-flex justify-content-center align-items-center">
                  <span class=""></span> Kembali
                </a>
             <!-- </div>-->
            </form>
          </div>
        </div>
      </div>
    </div>


  </div>

  <script type="text/javascript">
    function validasi() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      if (username != "" && password != "") {
        return true;
      } else {
        alert('Username dan Password harus diisi');
        return false;
      }
    }
  </script>

  <script src="assets_login/js/jquery-3.3.1.min.js"></script>
  <script src="assets_login/js/popper.min.js"></script>
  <script src="assets_login/js/bootstrap.min.js"></script>
  <script src="assets_login/js/main.js"></script>
</body>

</html>