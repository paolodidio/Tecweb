<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

<div id="Register">

    <h1 class="page-title">Registrati</h1>
    <p><?php display_message(); ?></p>

    <form method="post" action="">
        <legend>Registrati</legend>
        <?php reg_user(); ?>
        <div class="reg-input-group">
            <label for="email">Email: </label>
            <input type="email" name="email" value="">
        </div>
        <div class="reg-input-group">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" onkeyup="check();">
        </div>
        <div class="reg-input-group">
            <label for="password">Ripeti password: </label>
            <input type="password" name="password2" id="password2" onkeyup="check();">
            <span id='message'></span>
        </div>
        <button type="submit" name="reg_user">Registrati</button>

        <!-- controllo input lato client -->
        <script>

            var check = function() {
                if (document.getElementById('password').value ===
                    document.getElementById('password2').value) {

                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Le password corrispondono';
                } else {
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('message').innerHTML = 'Le password non corrispondono';
                }
            }

        </script>

    </form>

</div>


<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
