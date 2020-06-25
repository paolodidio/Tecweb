<div>
<a class="skip-nav" href="<?php echo skip_to($_SERVER['PHP_SELF']); ?>" tabindex="1">Vai al contenuto della pagina</a>
</div>
<div class="navigation-bar" id="Navbar">
  <ul>
    <li><a class="navlogo" href="../public/index.php" tabindex="2" xml:lang="en"><img src="../public/images/logohome_small.png" alt="Succulente Shop"/></a></li>
    <li><a href="../public/index.php" tabindex="3" xml:lang="en">Home</a></li>
    <li><a href="../public/piante.php" tabindex="4">Piante</a></li>
    <li><a href="../public/sudinoi.php" tabindex="5">Su di noi</a></li>
    <li><a href="../public/contatti.php" tabindex="6">Contatti</a></li>
    <li><a href="../public/checkout.php" tabindex="7">Carrello</a></li>
    <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            if(isset($_SESSION['admin'])){
              echo "<li><a href='../public/profile.php' tabindex='8'>Profilo</a></li>";
              echo "<li><a href='../public/admin/index.php' tabindex='9'>Dashboard</a></li>";
              echo "<li><a href='../public/logout.php' id='Logout' xml:lang='en' tabindex='10'>Logout</a></li>";
            }
            else {
                 echo "<li><a href='../public/profile.php' tabindex='8'>Profilo</a></li>";
                  echo "<li><a href='../public/logout.php' id='Logout' xml:lang='en' tabindex='9'>Logout</a></li>";
            }
          }
          else{
            echo "<li><a href='../public/registrazione.php' id='Registrati' tabindex='9'>Registrati</a></li>";
            echo "<li><a href='../public/login.php' id='Accedi' tabindex='8'>Accedi</a></li>";
          }
      ?>
    <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a></li>
  </ul>
</div>