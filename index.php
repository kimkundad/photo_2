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

  <?php include './layouts/style.php' ?>

</head>

<body class="bobo" style="">


<?php include 'layouts/header.php';?>

<style>
figure {
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
figure:hover+span {
	bottom: -36px;
	opacity: 1;
}

.hover01 figure img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover01 figure:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.1);
}
</style>



<div class="slider-pro" id="my-slider">
  <div class="sp-slides">
    <!-- Slide 1 -->
    <div class="sp-slide">
      <img class="sp-image" src="assets/image/slide/17ESP004_web-banner-FA-adjusted-2-1_1.jpg" />
    </div>

    <!-- Slide 2 -->
    <div class="sp-slide">
      <img class="sp-image" src="assets/image/slide/1400x570 pixel-01 of DigitalLab.jpg" />
    </div>

    <!-- Slide 3 -->
    <div class="sp-slide">
      <img class="sp-image" src="assets/image/slide/kv-homepage-b2b-optimised2.jpg" />
    </div>
  </div>
</div>


<main>

  <div class="container margin_30">

    <div class="row">


      <div class="col-md-6 ">

        <div class="general_icons text-center">
          <ul>
            <li><img src="assets/images/social/fb.png" /></li>
            <li><img src="assets/images/social/ig.png" /></li>

            <li><img src="assets/images/social/icono-de.png" /></li>
            <li><img src="assets/images/social/mobile-icon.png" /></li>
            <li><img src="assets/images/social/twitter_circle-512.png" /></li>

          </ul>
        </div>
        <h3 class="text-center">CONNECT WITH US!</h3>
        <h3 class="text-center"><?=$thai['test']?> <?=$_SESSION["lang"]?></h3>
      </div>

      <hr class="visible-sm visible-xs"/>

      <div class="col-md-6 ">
        <div class="text-center">
          <h3>SIGN IN</h3>
          <p>
            SIGN IN OR JOIN TO MAKE A BEAUTIFUL<br /> PHOTO GIFT.
          </p>


          <a href="login.php" class="btn_1">Login</a>
          <a href="login.php" class="btn_3">Sign up</a>
        </div>

      </div>

      <hr class="visible-sm visible-xs"/>
    </div>




  </div>
  <!-- End container -->


  <div class="container margin_60">

    <div class=" margin_30 text-center">
      <h2 class="major"><span>NEW ARRIVALS!</span></h2>

    </div>

    <div class="row">

      <div class="col-md-6 col-sm-6 text-center">
        <div class="hover01">

            <a href="photo_print.php">
              <figure>
                <img src="assets/images/nn1.jpg" alt="Pic" class="img-responsive">
              </figure>
            </a>

        </div>

        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 text-center">
        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/nn2.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>



      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/HGifts.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/HPhotobooks.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/Hframes.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/HGifts.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>


    </div>


    <p class="text-center add_bottom_30 margin_60">
      <a href="#" class="btn_1">All Product </a>
    </p>


    <div class=" margin_30 text-center">
      <h2 class="major"><span>WHAT'S HOT</span></h2>

    </div>



    <div class="row">


      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/HGifts.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/HPhotobooks.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/Hframes.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/HGifts.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>


      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/HGifts.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/HPhotobooks.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/Hframes.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-3 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/HGifts.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>


    </div>




    <p class="text-center add_bottom_30 margin_60">
      <a href="#" class="btn_1">All Product </a>
    </p>




    <div class=" margin_30 text-center">
      <h2 class="major"><span>WHAT'S NEW</span></h2>

    </div>



    <div class="row">


      <div class="col-md-4 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/HGifts.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-4 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/HPhotobooks.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>

      <div class="col-md-4 col-sm-6 text-center">

        <div class="hover01">
          <a href="product_1.php">
            <figure>
              <img src="assets/images/Hframes.jpg" alt="Pic" class="img-responsive">
            </figure>
          </a>
        </div>
        <h4>FLAT CARDS</h4>
        <p>
          70% off 5x7 Stationery Flat Cards.
        </p>
      </div>




    </div>




    <p class="text-center add_bottom_30 margin_60">
      <a href="#" class="btn_1">All Product </a>
    </p>


    <div class=" margin_30 text-center">
      <h2 class="major"><span>OUR CUSTOMERS</span></h2>

    </div>



    <section class="regular slider">
      <div class="col-md-2 ">
        <img src="assets/image/logo-Isuzu.png" class="img-responsive">
      </div>
      <div class="col-md-2 ">
        <img src="assets/image/logo-fwd.png" class="img-responsive">
      </div>
      <div class="col-md-2 ">
        <img src="assets/image/logo-samsung.png" class="img-responsive">
      </div>
      <div class="col-md-2">
        <img src="assets/image/logo-SB.png" class="img-responsive">
      </div>
      <div class="col-md-2">
        <img src="assets/image/logo-scotch.png" class="img-responsive">
      </div>
      <div class="col-md-2">
        <img src="assets/image/logo-thaiairway.png" class="img-responsive">
      </div>
      <div class="col-md-2">
        <img src="assets/image/logo-major.png" class="img-responsive">
      </div>
      <div class="col-md-2">
        <img src="assets/image/logo-pasaya.png" class="img-responsive">
      </div>
      <div class="col-md-2">
        <img src="assets/image/logo-ptt.png" class="img-responsive">
      </div>
      <div class="col-md-2">
        <img src="assets/image/logo-SCG.png" class="img-responsive">
      </div>
    </section>

  </div>
  <!-- End container -->
</main>
<!-- End main -->





<?php include 'layouts/footer.php';?>
<?php include 'layouts/script.php';?>

</body>

</html>
