<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

<!-- breadcrumb -->
<div class="breadcrumb">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li>Registrati</li>
    </ul>
</div>


<div id="Register">

    <h1 class="page-title">Registrati</h1>
    <p class="warning-msg"><?php display_message(); ?></p>

    <form method="post" action="">
        <fieldset>
            <legend>Registrati</legend>
            <?php reg_user(); ?>
            <div class="login-input-group">
                <label for="email" xml:lang="en">Email: </label>
                <input type="email" name="email" required/>
                <label for="password"  xml:lang="en">Password: </label>
                <input type="password" name="password" id="password" onkeyup="check();" required/>
                <label for="password2">Ripeti <span  xml:lang="en">password:</span>  </label>
                <input type="password" name="password2" id="password2" onkeyup="check();" required/>
                <span id='message'></span>
            </div>
            <button class="submit-button" type="submit" name="reg_user">Registrati</button>
            <input class="reset-button" type="button" value="Reset" onclick="this.form.reset()" />

            <!-- controllo input lato client -->
            <script type="text/javascript">

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
        </fieldset>
    </form>

</div>


<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
