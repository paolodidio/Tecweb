<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

<div id="Conferma">
  <!-- breadcrumb -->
  <div class="breadcrumb">
      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="checkout.php">Carrello</a></li>
          <li>Conferma Pagamento</li>
      </ul>
  </div>


  <?php process_pay(); ?>

  <p class="page-title">Grazie per l'acquisto!</p>

</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
