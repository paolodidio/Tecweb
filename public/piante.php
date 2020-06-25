<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

    <!-- breadcrumb -->
    <div class="breadcrumb">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>Piante</li>
        </ul>
    </div>


<div class="plant-shop" id="PlantShop">

  <h1 class="page-title">Catalogo piante</h1>

  <div id="Categorie">
    <p>Esplora le piante per categoria</p>
    <ul class="categorie-small">

      <?php get_categories(); ?>

    </ul>
  </div>

  <?php get_products(); ?>

</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>