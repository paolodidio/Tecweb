
<div class="navigation-bar" id="Navbar">
  <a href="../public/index.php">Home</a>
  <a href="../public/piante.php">Piante</a>
  <a href="../public/sudinoi.php">Su di noi</a>
  <a href="../public/contatti.php">Contatti</a>
  <a href="../public/checkout.php">Carrello</a>
  <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        echo "<a href=\"profile.php\">Profilo</a>";
        echo "<a href=\"logout.php\" id='logout'>Logout</a>";}
    else{
        echo "<a href=\"login.php\" id=\"Accedi\">Accedi</a>";
        echo "<a href='registrati.html' id='Registrati'>Registrati</a>";
      }
    ?>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>