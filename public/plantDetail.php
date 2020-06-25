<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

  <div id="PlantDetail">
    <!-- breadcrumb -->
      <div class="breadcrumb">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="piante.php">Piante</a></li>
        <li>Dettagli pianta</li>
      </ul>
    </div>

    <?php show_plant(); ?>
  </div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>