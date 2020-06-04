<?php require_once("../resources/config.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>

  <!-- meta tag -->
  <meta http-equiv="content-type" content="text/html" charset="utf-8">
  <meta name="description" content="Bisogna inserire la descrizione breve del contenuto della pagina">
  <meta name="keywords" content="succulente, piante">
  <meta name="author" content="Anna Cisotto Bertocco, Ismaele Gobbo, Paolo di Dio, Lucrezia Gradi">

  <title>Piante - Succulente</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <!-- Navigation bar -->
  <?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>

  <?php
      $query = query("SELECT * FROM piante WHERE pianta_id =" . escape_string($_GET['id']) . " ");
      confirm($query);

      while($row = fetch_array($query)):


   ?>

  <div class="plant-container">
    <img src="images/plants/echinopsis.jpg" alt="">
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

  <script src="../js/hamburger.js"></script>

</body>

</html>
