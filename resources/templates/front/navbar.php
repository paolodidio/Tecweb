<a class="skip-nav" href="<?php echo skip_to($_SERVER['PHP_SELF']); ?>" tabindex="-1">Vai al contenuto della pagina</a>
<div class="navigation-bar" id="Navbar">
  <ul>
    <li><a href="../public/index.php" tabindex="1" xml:lang="en">Home</a></li>
    <li><a href="../public/piante.php" tabindex="2">Piante</a></li>
    <li><a href="../public/sudinoi.php" tabindex="3">Su di noi</a></li>
    <li><a href="../public/contatti.php" tabindex="4">Contatti</a></li>
    <li><a href="../public/checkout.php" tabindex="5">Carrello</a></li>
    <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
          echo "<li><a href='../public/profile.php' tabindex='6'>Profilo</a></li>";
          echo "<li><a href='../public/logout.php' id='Logout' xml:lang='en' tabindex='7'>Logout</a></li>";}
      else{
          echo "<li><a href='../public/registrazione.php' id='Registrati' tabindex='7'>Registrati</a></li>";
          echo "<li><a href='../public/login.php' id='Accedi' tabindex='6'>Accedi</a></li>";
        }
      ?>
    <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a></li>
  </ul>
</div>