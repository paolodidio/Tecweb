<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

<div id="plant-page">

    <div id="plants">

      <div id="plant-flex-wrapper">

        <h3>Lista delle nostre piante</h3>
        <ul class="plant-flex">

          <?php get_products(); ?>

        </ul>

      </div>

    </div>

</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>