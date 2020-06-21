<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

  <?php
      $query = query("SELECT * FROM piante WHERE pianta_id =" . escape_string($_GET['id']) . " ");
      confirm($query);

      while($row = fetch_array($query)):

   ?>

   <?php $pianta_img = display_image($row['pianta_img']); ?>

    <div class="plant-detail-container">

      <img src="../resources/<?php echo $pianta_img ?>" alt="immagine pianta <?php echo $row['nome'] ?>">

      <div class="plant-desc-panel">
        <p class="plant-detail-name"><?php echo $row['nome']; ?></p>
        <p class="plant-detail-spec">Famiglia: <span><?php echo $row['famiglia']; ?></span></p>
        <p class="plant-detail-spec">Genere: <span><?php echo $row['genere']; ?></span></p>
        <p class="plant-detail-spec">Specie: <span><?php echo $row['specie']; ?></span></p>
        <p class="plant-detail-desc"><?php echo $row['descrizione']; ?></p>
        <p class="plant-detail-spec">Prezzo: <span><?php echo $row['prezzo']; ?> €</span></p>
        <a href="../resources/carrello.php?add=<?php echo $row['pianta_id']; ?>">Aggiungi al carrello</a>
      </div>

      <div class="plant-info-panel">
        <dl>
          <dt>Periodo di fioritura</dt>
          <dd><?php echo $row['fioritura']; ?></dd>
          <dt>Colore fiori</dt>
          <dd><?php echo $row['colore']; ?></dd>
          <dt>Illuminazione</dt>
          <dd><?php echo $row['illuminazione']; ?></dd>
          <dt xml:lang="en">Hardiness</dt>
          <dd><?php echo $row['hardiness']; ?></dd>
          <dt>Da interno</dt>
          <dd><?php echo $row['interno']; ?></dd>
        </dl>
      </div>

    </div>

  <?php endwhile; ?>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>