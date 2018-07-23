<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Photobook </title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <?php include 'layouts/style.php';?>

</head>

<body class="bobo" style="">


<?php include 'layouts/header.php';?>



<style>
.panel-body {
    background: #eee;
}
</style>


  <main class="white_bg" style="margin-top:120px;">




    <div class="container margin_60">

      <div class=" margin_30 text-center">
        <h2 class="major"><span style="background: #fff;">SIGN IN</span></h2>
        <p>
          SIGN IN OR JOIN TO MAKE A BEAUTIFUL PHOTO GIFT.
        </p>
      </div>

      <div class="row">

        <div class="col-md-6 col-sm-6 text-center">
          <div class="panel panel-default login_box">

            <div class="panel-body">



              <div class="form-group">

                <br />

                <div style="margin-bottom: 16px;">
                  <a class="btn btn-block btn-social btn-facebook btn-lg " style="text-align: center;">
                      <i class="icon-facebook-1"></i> Sign in with Facebook
                    </a>
                    <br />
                    <a class="btn btn-block btn-social btn-google-plus btn-lg" style="text-align: center;">
                      <i class="icon-gmail"></i> Sign in with Google
                    </a>
                </div>


              </div>


              <div>
                <p class="t_mid">OR</p>
              </div>


              <form class="form-horizontal" role="form" method="POST" action="#">
                <input type="hidden" name="_token" value="HEQGT8SJlmYZnorVxD73YtsTgKNcTA4UuCpwwYn1">

                <div class="form-group">
                  <div class="col-md-12 text-left">
                    <label for="exampleInputEmail1">Your E-mail</label>
                    <input  type="email" class="form-control" name="email" placeholder="Your Email" value="">

                  </div>
                </div>

                <div class="form-group">


                  <div class="col-md-12 text-left">
                    <label for="exampleInputPassword1">Password</label>
                    <input  type="password" class="form-control" name="password" placeholder="Password">

                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 ">



                    <a class="btn btn-link pull-right" href="#">Forgot Password?</a>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12 ">
                    <a type="submit" class="btn btn-submit pull-right">
                          <i class="fa fa-btn "></i> Login
                    </a>
                  </div>
                </div>





              </form>
            </div>
          </div>
        </div>







        <div class="col-md-6 col-sm-6 text-center">
          <div class="panel panel-default login_box">

            <div class="panel-body">


              <h3 >SIGN UP WITH US!</h3>





              <form class="form-horizontal" role="form" method="POST" action="#">
                <input type="hidden" name="_token" value="HEQGT8SJlmYZnorVxD73YtsTgKNcTA4UuCpwwYn1">



                <div class="form-group">

                  <div class="col-md-12">
                    <input  type="email" class="form-control" name="email" placeholder="Email" value="">

                  </div>
                </div>

                <div class="form-group">

                  <div class="col-md-12">
                    <input  type="password" class="form-control" name="password" placeholder="Password">

                  </div>
                </div>

                <div class="form-group">

                  <div class="col-md-12">
                    <input  type="password" class="form-control" name="password-confirm" placeholder="Confirm Password">

                  </div>
                </div>



                <div class="form-group">
                  <div class="col-md-12 ">
                    <a type="submit" class="btn btn-submit btn-block">
                                    <i class="fa fa-btn "></i> Sign up
                                </a>
                  </div>
                </div>
                <hr>

                <div>
                  <p class="t_mid">OR</p>
                </div>



                <div style="margin-bottom: 16px;">
                  <a class="btn btn-block btn-social btn-facebook btn-lg " style="text-align: center;">
                      <i class="icon-facebook-1"></i> Sign in with Facebook
                    </a>
                    <br />
                    <a class="btn btn-block btn-social btn-google-plus btn-lg" style="text-align: center;">
                      <i class="icon-gmail"></i> Sign in with Google
                    </a>
                </div>




              </form>
            </div>
          </div>
        </div>


      </div>




    </div>
    <!-- End container -->
  </main>
  <!-- End main -->




<?php include 'layouts/footer.php';?>
<?php include 'layouts/script.php';?>

</body>

</html>
