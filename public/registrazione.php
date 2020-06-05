<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>


<div class="header">
    <div class="header-title">
        <h1>Pagina di registrazione</h1>
        <h2><?php display_message(); ?></h2>
    </div>
</div>

<div>
    <form method="post" action="">

        <?php reg_user(); ?>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Registrati</button>
        </div>
        <?php var_dump($_SESSION);?>

    </form>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
