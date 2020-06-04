<?php require_once("../resources/config.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>

  <!-- meta tag -->
  <meta http-equiv="content-type" content="text/html" charset="utf-8">
  <meta name="description" content="Bisogna inserire la descrizione breve del contenuto della pagina">
  <meta name="keywords" content="succulente, piante">
  <meta name="author" content="Anna Cisotto Bertocco, Ismaele Gobbo, Paolo di Dio, Lucrezia Gradi">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- tag di Paolo per non avere la pagina in cache -->
  <meta http-equiv="Cache-control" content="no-cache">

  <title>Succulente</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <!-- Navigation bar -->
  <?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>

  <!-- Page Content -->
<div class="container">


<!-- /.row -->

<div class="row">

    <h1>Checkout</h1>

    <form action="">
        <table class="table table-striped">
            <thead>
              <tr>
               <th>Product</th>
               <th>Price</th>
               <th>Quantity</th>
               <th>Sub-total</th>

              </tr>
            </thead>
            <tbody>
                <?php cart(); ?>
            </tbody>
        </table>
    </form>
</div>



<!--  ***********CART TOTALS*************-->

<div class="col-xs-4 pull-right ">
    <h2>Cart Totals</h2>

    <table class="table table-bordered" cellspacing="0">

        <tr class="cart-subtotal">
            <th>Items:</th>
            <td>
              <span class="amount">
                <?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = ""; ?>
              </span>
            </td>
        </tr>
        <tr class="shipping">
            <th>Shipping and Handling</th>
            <td>Free Shipping</td>
        </tr>

        <tr class="order-total">
            <th>Order Total</th>
            <td><strong>
              <span class="amount">
                <?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = ""; ?>
              </span>
            </strong></td>
        </tr>

    </table>

</div><!-- CART TOTALS-->


</div><!--Main Content-->

<script src="js/hamburger.js"></script>

</body>

</html>
