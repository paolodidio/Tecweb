<?php require_once("../resources/config.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>

    <!-- meta tag -->
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta name="description" content="Bisogna inserire la descrizione breve del contenuto della pagina">
    <meta name="keywords" content="Bisogna inserire delle parole chiave che compaiano nel contenuto della pagina">
    <meta name="author" content="Anna Cisotto Bertocco, Ismaele Gobbo, Paolo di Dio, Lucrezia Gradi">

    <!-- Paolo tag per non avere la pagina in cache -->
    <meta http-equiv="Cache-control" content="no-cache">


    <title>Succulente</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>

  <!-- Navigation bar -->
  <?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>

<div id="plant-page">

    <div id="filters">

        <div id="skip-filters" class="hidden">
            <a href="#plant-flex-wrapper">Salta i filtri e leggi le piante</a>
        </div>

        <div id="category-list">
            <h3>Categorie</h3>

            <?php

                  $query = "SELECT * FROM categorie";
                  $send_query = mysqli_query($connection, $query);

                  if(!$send_query) {
                      die("QUERY FAILED " . mysqli_error($connection));
                  }
                  while($row = mysqli_fetch_array($send_query)) {

                      echo "<p class='category'>{$row['cat_title']}</p>";

                  }

              ?>

        </div>

        <div id="filter-list">
          <h3>Filtri avanzati</h3>
          <form action="">
            <fieldset>
              <ul>
                <legend>Filtra per categoria</legend>
                <li class="newline">
                  <input type="checkbox" id="filter-category-dainterno" name="filter-category-dainterno" value="dainterno">
                  <label for="filter-category-dainterno">Da Interno</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-category-tappezzanti" name="filter-category-tappezzanti" value="tappezzanti">
                  <label for="filter-category-tappezzanti">Tappezzanti</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-category-giardinoroccioso" name="filter-category-giardinoroccioso" value="giardinoroccioso">
                  <label for="filter-category-giardinoroccioso">Giardino roccioso</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-category-cactus" name="filter-category-cactus" value="cactus">
                  <label for="filter-category-cactus">Cactus</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-category-dafiore" name="filter-category-dafiore" value="dafiore">
                  <label for="filter-category-dafiore">Da fiore</label>
                </li>
              </ul>

            </fieldset>
            <fieldset>
              <legend>Filtra per colore fiori</legend>
              <ul>
                <li class="newline">
                  <input type="checkbox" id="filter-color-grigio" name="filter-color-grigio" value="grigio">
                  <label for="filter-color-grigio">Grigio</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-nero" name="filter-color-nero" value="nero">
                  <label for="filter-color-nero">Nero</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-marrone" name="filter-color-marrone" value="marrone">
                  <label for="filter-color-marrone">Marrone</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-bronzo" name="filter-color-bronzo" value="bronzo">
                  <label for="filter-color-bronzo">Bronzo</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-crema" name="filter-color-crema" value="crema">
                  <label for="filter-color-crema">Crema</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-oro" name="filter-color-oro" value="oro">
                  <label for="filter-color-oro">Crema</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-crema" name="filter-color-crema" value="crema">
                  <label for="filter-color-">Oro</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-giallo" name="filter-color-giallo" value="giallo">
                  <label for="filter-color-giallo">Giallo</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-arancio" name="filter-color-arancio" value="arancio">
                  <label for="filter-color-arancio">Arancio</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-rosso" name="filter-color-rosso" value="rosso">
                  <label for="filter-color-rosso">Rosso</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-rosa" name="filter-color-rosa" value="rosa">
                  <label for="filter-color-rosa">Rosa</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-viola" name="filter-color-viola" value="viola">
                  <label for="filter-color-viola">Viola</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-verde" name="filter-color-verde" value="verde">
                  <label for="filter-color-verde">Verde</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-blu" name="filter-color-blu" value="blu">
                  <label for="filter-color-blu">Blu</label>
                </li>
                <li class="newline">
                  <input type="checkbox" id="filter-color-bianco" name="filter-color-bianco" value="bianco">
                  <label for="filter-color-bianco">Bianco</label>
                </li>
              </ul>

              <input type="reset" value="Reset">
              <input type="submit" value="Submit">

            </fieldset>
          </form>
        </div>

    </div>

    <div id="plants">

      <div id="plant-flex-wrapper">

        <h3>Lista delle nostre piante</h3>
        <ul class="plant-flex">

          <?php get_products(); ?>

        </ul>

      </div>

    </div>

</div>

<script src="../js/hamburger.js"></script>

</body>

</html>
