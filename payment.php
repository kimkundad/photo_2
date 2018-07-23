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
          <div class="f1-progress-line" data-now-value="13.66" data-number-of-steps="4" style="width: 63%;"></div>
      </div>
      <div class="f1-step active">
        <div class="f1-step-icon"><i class=" icon-basket-1"></i></div>
        <p>Cart</p>
      </div>
      <div class="f1-step active">
        <div class="f1-step-icon"><i class=" icon-truck"></i></div>
        <p>Shipping</p>
      </div>
        <div class="f1-step active">
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
          <h3><strong>2</strong>Payment Information</h3>
          <p>
            Mussum ipsum cacilds, vidis litro abertis.
          </p>
        </div>

        <div class="step">
          <div class="form-group">
            <label>Name on card</label>
            <input type="text" class="form-control" id="name_card_bookign" name="name_card_bookign">
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label>Card number</label>
                <input type="text" id="card_number" name="card_number" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <img src="assets/images/cards.png" width="207" height="43" alt="Cards" class="cards">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>Expiration date</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="MM">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Year">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Security code</label>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <img src="assets/images/icon_ccv.gif" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End row -->

          <hr>

          <h4>Or checkout with Paypal</h4>
          <p>
            Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie, reque fierent dissentiunt mel ea.
          </p>
          <p>
            <img src="assets/images/paypal_bt.png" alt="Image">
          </p>
        </div>


        <div id="policy">
          <h4>Cancellation policy</h4>
          <div class="form-group">
            <label>
              <div class="icheckbox_square-grey" style="position: relative; width: 23px;"><input type="checkbox" name="policy_terms" id="policy_terms" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>I accept terms and conditions and general policy.</label>
          </div>

          <a href="confirmation.html" class="btn btn-next">SUBMIT NOW</a>
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
