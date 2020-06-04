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


    <title>Registrazione utenti</title>

    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>

<!-- Navigation bar-->
<div class="navigation-bar" id="Navbar">
    <a href="home.html">Home</a>
    <a href="#piante">Piante</a>
    <a href="about.html" >Su di noi</a>
    <a href="contatti.html">Info spedizioni</a>
    <a href="#registrati" id="Registrati">Registrati</a>
    <a href="#accedi" id="Accedi">Accedi</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <!-- OCCHIO SI CHIAMA MYFUNCTION -->
        <i class="fa fa-bars"></i>
    </a>
</div>


<div class="header">
    <div class="header-title">
        <h1>Pagina registrazione</h1>
    </div>
</div>

<div>
    <form method="post" action="registrazione.php">
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
</div>

<div>
    <form method="post"  action="registrazione.php">
    <button type="submit" class="btn" name="test"> Test</button>
    </form>
</div>

<?php include('../php/registration.php') ?>
<?php include('../php/read-database.php') ?>


</body>
</html>