<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

<div class="plant-shop">

  <h1><?php echo show_cat_name($_GET['id']); ?></h1>
  <ul>

    <?php get_cat_products(); ?>

  </ul>

</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
