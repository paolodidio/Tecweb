<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

  <!-- header -->
  <div class="header">
    <div class="header-title">
      <h1>Succulente</h1>
      <p>Scopri e acquista piante dalla migliore selezione di succulente sul mercato.</p>
      <a href="piante.php">Acquista</a>
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

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>