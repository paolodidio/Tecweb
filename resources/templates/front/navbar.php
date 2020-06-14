
<div class="navigation-bar" id="Navbar">
  <ul>
    <li><a href="../public/index.php" tabindex="1" xml:lang="en">Home</a></li>
    <li><a href="../public/piante.php" tabindex="2">Piante</a></li>
    <li><a href="../public/sudinoi.php" tabindex="3">Su di noi</a></li>
    <li><a href="../public/contatti.php" tabindex="4">Contatti</a></li>
    <li><a href="../public/checkout.php" tabindex="5">Carrello</a></li>
    <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
          echo "<li><a href='profile.php'>Profilo</a></li>";
          echo "<li><a href='logout.php' id='logout' xml:lang='en'>Logout</a></li>";}
      else{
          echo "<li><a href='login.php' id='Accedi'>Accedi</a></li>";
          echo "<li><a href='registrazione.php' id='Registrati'>Registrati</a></li>";
        }
      ?>
    <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a></li>
  </ul>
</div>