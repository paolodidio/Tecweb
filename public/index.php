<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

  <div id="header">
    <div id="header-title">
      <h1>Succulente</h1>
      <p class="subtitle">Scopri e acquista piante dalla migliore selezione di succulente sul mercato.</p>
      <a href="piante.php" class="colored-button">Acquista</a>
    </div>
    <div id="header-image"></div>
  </div>

  <div id="how-it-works">
    <h2>Come funziona</h2>
    <ul>
      <li id="order">Scegli le tue piante e aggiungile al carrello.</li>
      <li id="refill">Riforniamo ogni settimana il nostro magazzino con piante nuove.</li>
      <li id="delivery">Portiamo la pianta direttamente a casa tua.</li>
    </ul>
  </div>

  <div id="categories">
    <h2 class="page-title">Categorie</h2>
    <p class="subtitle">Esplora le piante per categoria</p>
    <ul>

      <?php get_categories(); ?>

    </ul>
  </div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>