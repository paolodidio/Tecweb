<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

<div class="login-page">
    <h1 class="page-title">Accedi</h1>
    <p><?php display_message(); ?></p>

    <form method="post" action="">
        <legend>Accedi</legend>
        <?php login_user(); ?>
        <div class="login-input-group">
            <label for="email">Email: </label>
            <input type="email" name="email" value="">
        </div>
        <div class="login-input-group">
            <label for="password">Password: </label>
            <input type="password" name="password">
        </div>
        <button class="" type="submit" class="btn" name="log_user">Accedi</button>
        <a href="registrazione.php"> Non hai un account? Registrati</a>

    </form>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>