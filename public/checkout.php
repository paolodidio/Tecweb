<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

  <div id="Checkout">

    <h1 class="page-title" xml:lang="en">Checkout</h1>
    <p class="warning-msg"><?php display_message(); ?></p>

    <div id="CheckoutContent">
      <div>
        <table class="table" summary="Piante acquistate">
          <thead>
            <tr>
              <th>Pianta</th>
              <th>Prezzo</th>
              <th>Quantit&agrave;</th>
              <th>Sub totale</th>
              <th>Azioni</th>
            </tr>
          </thead>
          <tbody>
            <?php cart(); ?>
          </tbody>
        </table>

        <?php pay(); ?>
      </div>

      <div id="CheckoutTotal">

        <p>Totale carrello</p>

        <table class="table" summary="Totale">
          <thead>
            <tr>
              <th>Numero piante</th>
              <th>Spedizione</th>
              <th>Totale</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?></td>
              <td>Gratis</td>
              <td><?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?> &euro;</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
    
  </div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
