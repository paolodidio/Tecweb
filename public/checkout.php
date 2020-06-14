<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

  <div class="checkout">

    <h1 class="page-title" xml:lang="en">Checkout</h1>
    <p><?php display_message(); ?></p>

    <div class="checkout-content">
      <div class="checkout-summit">
        <table>
          <thead>
            <tr>
              <th>Pianta</th>
              <th>Prezzo</th>
              <th>Quantità</th>
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

      <div class="checkout-total">

        <p>Totale carrello</p>

        <table>
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
              <td><?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?> €</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
    
  </div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
