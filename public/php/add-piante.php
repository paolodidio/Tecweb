<?php
session_start();

// initializing variables
$email    = "";
//$errors = array();

// connect to the database
$connessione = new mysqli('localhost', 'root', 'root', 'mio');

// REGISTER USER
echo var_dump($_POST);

if (isset($_POST['add-pianta'])) {

    echo"son dentro";

    $query = "INSERT INTO pianta (id, genere,specie,nome,familgia,interno,descrizione,colore,fioritura,hardiness,illuminzione) 
  			  VALUES('1234', 'genere','specie','nome','familgia','1','descrizione','colore','fioritura','8','illuminzione')";
    mysqli_query($connessione, $query);
    header('location: ../html/piante.php');

    echo"<p> yoooooooooooo</p>";


}
echo"<p> yoooooooooooo222222222222222222222222</p>";
$connessione->close();
//session_destroy();