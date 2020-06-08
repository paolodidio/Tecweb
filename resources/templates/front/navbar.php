
<div class="navigation-bar" id="Navbar">
  <a href="../public/index.php" tabindex="1">Home</a>
  <a href="../public/piante.php" tabindex="2">Piante</a>
  <a href="../public/sudinoi.php" tabindex="3">Su di noi</a>
  <a href="../public/contatti.php" tabindex="4">Contatti</a>
  <a href="../public/checkout.php" tabindex="5">Carrello</a>
  <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        echo "<a href='profile.php'>Profilo</a>";
        echo "<a href='logout.php' id='logout'>Logout</a>";}
    else{
        echo "<a href='login.php' id='Accedi'>Accedi</a>";
        echo "<a href='registrazione.php' id='Registrati'>Registrati</a>";
      }
    ?>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>