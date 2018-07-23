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


<main class="slider-pro">


  <style>
  .f1-step {
  width: 25%;
  }
  .table {
  margin-bottom: 0px;
  }
  </style>

  <div class="container margin_60">

    <div class="f1-steps">
      <div class="f1-progress">
          <div class="f1-progress-line" data-now-value="13.66" data-number-of-steps="4" style="width: 38%;"></div>
      </div>
      <div class="f1-step active">
        <div class="f1-step-icon"><i class=" icon-basket-1"></i></div>
        <p>Cart</p>
      </div>
      <div class="f1-step active">
        <div class="f1-step-icon"><i class=" icon-truck"></i></div>
        <p>Shipping</p>
      </div>
        <div class="f1-step">
        <div class="f1-step-icon"><i class=" icon-dollar"></i></div>
        <p>Payment</p>
      </div>
      <div class="f1-step">
      <div class="f1-step-icon"><i class=" icon-check-3"></i></div>
      <p>Order Complete</p>
    </div>
    </div>



    <div class="row margin_30">

      <div class="col-md-8 box_style_1  add_bottom_15">


        <div class="box_style_1 visible-sm visible-xs">

          <table class="table table_summary" >
            <tbody>


              <tr>
                <td>
                  Point Order
                </td>
                <td class="text-right">
                  xxx
                </td>
              </tr>

              <tr>
                <td>
                  Total
                </td>
                <td class="text-right">
                  xxx
                </td>
              </tr>
              <tr>
                <td>
                  Discount
                </td>
                <td class="text-right">
                  ฿20
                </td>
              </tr>

              <tr class="total">
                <td>
                  Summary
                </td>
                <td class="text-right">
                  ฿20
                </td>
              </tr>
            </tbody>
          </table>

        </div>

        <div class="form_title">
          <h3><strong>1</strong>Your Details</h3>
          <p>
            Mussum ipsum cacilds, vidis litro abertis.
          </p>
        </div>
        <div class="step">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control" id="firstname_booking" name="firstname_booking">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>Last name</label>
                <input type="text" class="form-control" id="lastname_booking" name="lastname_booking">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" id="email_booking" name="email_booking" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>Telephone</label>
                <input type="text" id="telephone_booking" name="telephone_booking" class="form-control">
              </div>
            </div>
          </div>

        </div>
        <!--End step -->


        <div class="form_title">
          <h3><strong>2</strong>Billing Address</h3>
          <p>
            Mussum ipsum cacilds, vidis litro abertis.
          </p>
        </div>
        <div class="step">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>Country</label>
                <select class="form-control" name="country" id="country">
                  <option value="" selected="">Select your country</option>
                  <option value="Europe">Europe</option>
                  <option value="United states">United states</option>
                  <option value="Asia">Asia</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>Street line 1</label>
                <input type="text" id="street_1" name="street_1" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>Street line 2</label>
                <input type="text" id="street_2" name="street_2" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>City</label>
                <input type="text" id="city_booking" name="city_booking" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>State</label>
                <input type="text" id="state_booking" name="state_booking" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Postal code</label>
                <input type="text" id="postal_code" name="postal_code" class="form-control">
              </div>
            </div>
          </div>
          <!--End row -->
        </div>
        <!--End step -->

        <div id="policy">
          <h4>Cancellation policy</h4>
          <div class="form-group">
            <label>
              <div class="icheckbox_square-grey" style="position: relative; width: 23px;"><input type="checkbox" name="policy_terms" id="policy_terms" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>I accept terms and conditions and general policy.</label>
          </div>
          <a href="payment.php" class="btn btn-next">PAYMENT NOW</a>
        </div>
      </div>



      <div class="col-md-4 ">


        <div class="box_style_1 hidden-sm hidden-xs">

          <table class="table table_summary" >
            <tbody>


              <tr>
                <td>
                  Point Order
                </td>
                <td class="text-right">
                  xxx
                </td>
              </tr>

              <tr>
                <td>
                  Total
                </td>
                <td class="text-right">
                  xxx
                </td>
              </tr>
              <tr>
                <td>
                  Discount
                </td>
                <td class="text-right">
                  ฿20
                </td>
              </tr>

              <tr class="total">
                <td>
                  Summary
                </td>
                <td class="text-right">
                  ฿20
                </td>
              </tr>
            </tbody>
          </table>

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
