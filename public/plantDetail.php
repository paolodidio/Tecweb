<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

  <?php
      $query = query("SELECT * FROM piante WHERE pianta_id =" . escape_string($_GET['id']) . " ");
      confirm($query);

      while($row = fetch_array($query)):

   ?>

   <?php $pianta_img = display_image($row['pianta_img']); ?>

    <div class="plant-container">

      <img src="../resources/<?php echo $pianta_img ?>" alt="">

      <div class="plant-desc-panel">
        <h1><?php echo $row['nome']; ?></h1>
        <p class="family"><?php echo $row['famiglia']; ?></p>
        <p><?php echo $row['descrizione']; ?></p>
      </div>

      <div class="plant-info-panel">
        <dl>
          <dt>Periodo fioritura</dt>
          <dd><?php echo $row['fioritura']; ?></dd>
          <dt>Illuminazione</dt>
          <dd><?php echo $row['illuminazione']; ?></dd>
          <dt>Hardiness</dt>
          <dd><?php echo $row['hardiness']; ?></dd>
          <dt>Colore fiori</dt>
          <dd><?php echo $row['colore']; ?></dd>
          <dt>Da interno</dt>
          <dd><?php echo $row['interno']; ?></dd>
        </dl>
      </div>

    </div>

  <?php endwhile; ?>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>