<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

<div class="plant-shop" id="PlantCat">

  <h1 class="page-title"><?php echo show_cat_name($_GET['id']); ?></h1>

  <?php get_cat_products(); ?>

</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
