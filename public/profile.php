<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>


<div id="Profile">
    <h1 class="page-title">Pagina profilo</h1>

    <p>Benvenuto, <?php echo $_SESSION['user']; ?></p>
    <p>Ecco il resoconto dei tuoi ultimi ordini</p>
    <table class="table" summary="Ordini">
        <thead>
        <tr>
            <th>Id</th>
            <th>Totale</th>
        </tr>
        </thead>
        <tbody>
        <?php show_orders(); ?>
        </tbody>
    </table>

</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>