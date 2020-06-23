<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

<div id="LoginPage">
    <h1 class="page-title">Accedi</h1>
    <p class="warning-msg"><?php display_message(); ?></p>

    <form method="post" action="">
        <legend>Accedi</legend>
        <?php login_user(); ?>
        <div class="login-input-group">
            <label for="email" xml:lang="en">Email: </label>
            <input type="email" placeholder="Inserisci email" name="email" required>
            <label for="password" xml:lang="en">Password: </label>
            <input type="password" placeholder="Inserisci password" name="password" required>
        </div>
        <button class="submit-button" type="submit" name="log_user">Accedi</button>
        <input class="reset-button" type="button" value="Reset" onClick="this.form.reset()" />
        <a href="../public/registrazione.php"> Non hai un <span xml:lang="en">account</span>? Registrati</a>

    </form>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>