<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>


<div class="header">
    <div class="header-title">
        <h1>Pagina profilo</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 home-wrapper">

            <!-- Display messages -->
            <h4>Welcome, <?php echo $_SESSION['user']; ?></h4>

        </div>
    </div>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>