<?php require_once("../../resources/config.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>

  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
  <meta name="description" content="Pagina di gestione del sito per l'amministratore">
  <meta name="keywords" content="succulente, piante, admin, cactus, e-commerce">
  <meta name="author" content="Anna Cisotto Bertocco, Ismaele Gobbo, Paolo di Dio, Lucrezia Gradi">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Cache-control" content="no-cache">

  <title>Admin | Succulente</title>

  <link rel="stylesheet" type="text/css" href="../../public/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <?php include(TEMPLATE_BACK . "/navbar.php"); ?>

  <!-- breadcrumb -->
  <div>
      <ul>
          <li>Dashboard</li>
      </ul>
  </div>


  <div class="admin-content" id="AdminContent">

    <?php show_content(); ?>

  </div>


<script src="../public/js/hamburger.js"></script>

</body>

</html>