<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

<div class="register-page">
    <h1 class="page-title">Registrati</h1>
    <p><?php display_message(); ?></p>

    <form method="post" action="">
        <legend>Accedi</legend>
        <?php reg_user(); ?>
        <div class="reg-input-group">
            <label for="email">Email: </label>
            <input type="email" name="email" value="">
        </div>
        <div class="reg-input-group">
            <label for="password">Password: </label>
            <input type="password" name="password">
        </div>
        <div class="reg-input-group">
            <label for="password">Ripeti password: </label>
            <input type="password" name="password2">
        </div>
        <button type="submit" name="reg_user">Registrati</button>

    </form>
</div>


<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
