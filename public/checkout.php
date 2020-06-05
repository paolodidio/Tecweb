<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

  <div class="container">

    <div class="row">

      <h1>Checkout</h1>

      <form action="" method="post">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>Pianta</th>
              <th>Prezzo</th>
              <th>Quantità</th>
              <th>Sub totale</th>
            </tr>
          </thead>
          <tbody>
            <?php cart(); ?>
          </tbody>
        </table>

        <?php pay(); ?>

      </form>

    </div>

    <!--  ***********CART TOTALS*************-->

    <div class="col-xs-4 pull-right ">

      <h2>Totale carrello</h2>

      <table class="table table-bordered" cellspacing="0">

        <tr class="cart-subtotal">
          <th>Prodotti:</th>
          <td>
            <span class="amount">
              <?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?>
            </span>
          </td>
        </tr>

        <tr class="shipping">
          <th>Spezione</th>
          <td>Gratis</td>
        </tr>

        <tr class="order-total">
          <th>Totale ordine</th>
          <td>
            <span class="amount">
              <?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>
            </span>
          </td>
        </tr>

      </table>

    </div>

  </div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
