<?php require_once("../resources/config.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>

  <!-- meta tag -->
  <meta http-equiv="content-type" content="text/html" charset="utf-8">
  <meta name="description" content="Bisogna inserire la descrizione breve del contenuto della pagina">
  <meta name="keywords" content="succulente, piante">
  <meta name="author" content="Anna Cisotto Bertocco, Ismaele Gobbo, Paolo di Dio, Lucrezia Gradi">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- tag di Paolo per non avere la pagina in cache -->
  <meta http-equiv="Cache-control" content="no-cache">

  <title>Succulente</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <!-- Navigation bar -->
  <?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>

  <!-- header -->
  <div class="header">
    <div class="header-title">
      <h1>Succulente</h1>
      <p>Scopri e acquista piante dalla migliore selezione di succulente sul mercato.</p>
      <a href="#piante">Scopri</a>
    </div>
    <div class="header-image"></div>
  </div>

  <!-- come funziona -->
  <div class="how-it-works">
    <h2>Come funziona</h2>
    <ul>
      <li class="order">Scegli le tue piante e aggiungile al carrello.</li>
      <li class="refill">Riforniamo ogni settimana il nostro magazzino con piante nuove.</li>
      <li class="delivery">Portiamo la pianta direttamente a casa tua.</li>
    </ul>
  </div>

  <!-- categorie -->
  <div class="categories">
    <h2>Categorie</h2>
    <p>Esplora le piante per categoria</p>
    <ul>

      <?php get_categories(); ?>

    </ul>
  </div>

  <script src="js/hamburger.js"></script>

</body>

</html>
