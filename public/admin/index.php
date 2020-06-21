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

  <link rel="stylesheet" type="text/css" href="../public/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <?php include(TEMPLATE_BACK . "/navbar.php"); ?>

  <div class="admin-content">


    <?php

    if($_SERVER['REQUEST_URI'] == "/Tecweb/public/admin/" || $_SERVER['REQUEST_URI'] == "/Tecweb/public/admin/index.php" ) {
        include(TEMPLATE_BACK . "/content.php");
    }

    if(isset($_GET['orders'])) {
        include(TEMPLATE_BACK . "/orders.php");
    }

    if(isset($_GET['prodotti'])) {
        include(TEMPLATE_BACK . "/prodotti.php");
    }

    if(isset($_GET['add-product'])) {
        include(TEMPLATE_BACK . "/add-product.php");
    }

    if(isset($_GET['edit-product'])) {
        include(TEMPLATE_BACK . "/edit-product.php");
    }

    if(isset($_GET['add-categoria'])) {
        include(TEMPLATE_BACK . "/add-categoria.php");
    }

    if(isset($_GET['users'])) {
        include(TEMPLATE_BACK . "/users.php");
    }

    if(isset($_GET['add-user'])) {
        include(TEMPLATE_BACK . "/add-user.php");
    }

    if(isset($_GET['edit-user'])) {
        include(TEMPLATE_BACK . "/edit-user.php");
    }

    if(isset($_GET['reports'])) {
        include(TEMPLATE_BACK . "/reports.php");
    }


    ?>


  </div>


<script src="../public/js/hamburger.js"></script>

</body>

</html>