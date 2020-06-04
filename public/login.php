<?php require_once("../resources/config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
    <!-- meta tag -->
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta name="description" content="Bisogna inserire la descrizione breve del contenuto della pagina">
    <meta name="keywords" content="Bisogna inserire delle parole chiave che compaiano nel contenuto della pagina">
    <meta name="author" content="Anna Cisotto Bertocco, Ismaele Gobbo, Paolo Di Dio, Lucrezia Gradi">

    <!-- tag di Paolo per non avere la pagina in cache -->
    <meta http-equiv="Cache-control" content="no-cache">


    <title>Login utenti</title>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>

<!-- Navigation bar-->
<?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>


<div class="header">
    <div class="header-title">
        <h1>Pagina login</h1>
        <h2><?php display_message(); ?></h2>
    </div>
</div>

<div>
    <form method="post" action="">

      <?php login_user(); ?>
        <div class="input-group">
            <label for="">Email</label>
            <input type="email" name="email" value="">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Login</button>
        </div>

    </form>
</div>

<div>
    <form method="post"  action="../php/logination.php">
        <button type="submit" class="btn" name="test"> Test</button>
    </form>
</div>

<script src="js/hamburger.js"></script>

</body>
</html>
