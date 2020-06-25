<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

<!-- breadcrumb -->
<div class="breadcrumb">
    <ul>
        <li>Home</li>
    </ul>
</div>



  <div id="Header">
    <div id="HeaderTitle">
      <h1>Succulente</h1>
      <p class="subtitle">Scopri e acquista piante dalla migliore selezione di succulente sul mercato.</p>
      <a href="../public/piante.php" class="colored-button">Acquista</a>
    </div>
    <div id="HeaderImg"></div>
  </div>

  <div id="HowItWorks">
    <h2>Come funziona</h2>
    <ul>
      <li id="Order">Scegli le tue piante e aggiungile al carrello.</li>
      <li id="Refill">Riforniamo ogni settimana il nostro magazzino con piante nuove.</li>
      <li id="Delivery">Portiamo la pianta direttamente a casa tua.</li>
    </ul>
  </div>

  <div id="Categorie">
    <h3 class="page-title">Categorie</h3>
    <p class="subtitle">Esplora le piante per categoria</p>
    <ul>

      <?php get_categories(); ?>

    </ul>
  </div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>