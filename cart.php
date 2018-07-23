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



<main class="slider-pro" >


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
          <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="4" style="width: 13.66%;"></div>
      </div>
      <div class="f1-step active">
        <div class="f1-step-icon"><i class=" icon-basket-1"></i></div>
        <p>Cart</p>
      </div>
      <div class="f1-step">
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

      <div class="col-md-8 ">

        <table class="table table-striped cart-list add_bottom_30">
          <thead>
            <tr>
              <th>
                Item
              </th>
              <th>
                Quantity
              </th>
              <th>
                Discount
              </th>
              <th>
                Total
              </th>
              <th>
                Actions
              </th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>
                <div class="thumb_cart">
                  <img src="">
                </div>
                <span class="item_cart">Collage Prints</span>
              </td>
              <td>
                <div class="numbers-row">
                  <input type="text" value="1" class="qty2 form-control" name="quantity">
                <div class="inc button_inc">+</div><div class="dec button_inc">-</div></div>
              </td>
              <td>
                0%
              </td>
              <td>
                <strong>$50</strong>
              </td>
              <td class="options">
                <a href="#"><i class=" icon-trash"></i></a>

              </td>
            </tr>


            <tr>
              <td>
                <div class="thumb_cart">
                  <img src="">
                </div>
                <span class="item_cart">Collage Prints</span>
              </td>
              <td>
                <div class="numbers-row">
                  <input type="text" value="1" class="qty2 form-control" name="quantity">
                <div class="inc button_inc">+</div><div class="dec button_inc">-</div></div>
              </td>
              <td>
                0%
              </td>
              <td>
                <strong>$50</strong>
              </td>
              <td class="options">
                <a href="#"><i class=" icon-trash"></i></a>

              </td>
            </tr>










          </tbody>
        </table>


      </div>



      <div class="col-md-4 ">


        <div class="box_style_1">

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

        <a href="shipping.php" class="btn btn-submit btn-block" style="height:43px;">NEXT</a>
        <br />
        <a class="btn_full_outline " style="margin-bottom: 30px;" href="shipping.php"><i class="icon-right"></i> Continue shopping</a>





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
