<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

<div class="plant-shop">

  <h1>Catalogo piante</h1>
  <ul>

    <?php get_products(); ?>

  </ul>

</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>