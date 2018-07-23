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


<main class="white_bg slider-pro" >




  <div class="container margin_60">

    <div class=" margin_30 text-center">
      <h2 class="major"><span style="background: #fff;">CONTACT US</span></h2>

    </div>

    <div class="row">


      <div class="col-md-8 col-sm-8">
					<div class="form_title">
						<h3><strong><i class="icon-pencil"></i></strong>Fill the form below</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">

						<div id="message-contact" style="display: block;"><div class="error_message">You must enter your Name.</div></div>



						<form method="post" action="#" id="contactform">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Enter Name">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Last Name</label>
										<input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="Enter Last Name">
									</div>
								</div>
							</div>
							<!-- End row -->
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Enter Phone number">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Message</label>
										<textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="Write your message" style="height:200px;"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Human verification</label>
									<input type="text" id="verify_contact" class=" form-control add_bottom_30" placeholder="Are you human? 3 + 1 =">
									<input type="submit" value="Submit" class="btn_1" id="submit-contact">
								</div>
							</div>
						</form>
					</div>
				</div>





        <div class="col-md-4 col-sm-4">
					<div class="box_style_1">
						<span class="tape"></span>
						<h4>Address <span><i class="icon-pin pull-right"></i></span></h4>
						<p>
							Place Charles de Gaulle, 75008 Paris
						</p>
						<hr>
						<h4>Help center <span><i class="icon-help pull-right"></i></span></h4>
						<p>
							Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie.
						</p>
						<ul id="contact-info">
							<li>+ 61 (2) 8093 3400 / + 61 (2) 8093 3402</li>
							<li><a href="#">info@domain.com</a>
							</li>
						</ul>
					</div>
					<div class="box_style_4">
						<i class="icon_set_1_icon-57"></i>
						<h4>Need <span>Help?</span></h4>
						<a href="tel://004542344599" class="phone">+45 423 445 99</a>
						<small>Monday to Friday 9.00am - 7.30pm</small>
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
