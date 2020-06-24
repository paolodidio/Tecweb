<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

    <!-- breadcrumb -->
    <div class="breadcrumb">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>Profilo</li>
        </ul>
    </div>


<div class="header" id="Profile">
    <div class="header-title">
        <h1>Pagina profilo</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 home-wrapper">

            <!-- Display messages -->
            <h2>Benvenuto, <?php echo $_SESSION['user']; ?></h2>

        </div>
    </div>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>