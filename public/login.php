<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>


<div class="header">
    <div class="header-title">
        <h1>Pagina login</h1>
        <h2><?php display_message(); ?></h2>
    </div>
</div>

<div>
    <form method="post" action="">
      <legend><h3>Accedi</h3></legend>
      <?php login_user(); ?>
        <div class="input-group">
            <label for="email">Email: </label>
            <input type="email" name="email" value="">
        </div>
        <div class="input-group">
            <label for="password">Password: </label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Login</button>
        </div>
        <div>
            <a href="#" > Non hai un account?</a>
        </div>

    </form>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>