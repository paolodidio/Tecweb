<?php
session_start();

// initializing variables
$email    = "";
//$errors = array();

// connect to the database
$connessione = new mysqli('localhost', 'root', 'root', 'mio');

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT nome FROM pianta";
    $result = mysqli_query($connessione, $user_check_query);

    if($result->num_rows > 0) {
        echo"<h3>Lista delle nostre piante</h3>";
        // ciclo dei record restituiti dalla query
        echo"<ul class=\"plant-flex\">";
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            echo"<li>";
            echo"<div class=\"plant-preview\">";
            echo"<div class=\"plant-preview-description\">";

            // PRINTA IL NOME
            echo"<div class=\"plant-preview-description-name\">";
            echo "<p class\"=bold\">" . $row['nome'] . "</p>";
            echo"</div>";


            echo"</div>";
            echo"</div>";
            echo"</li>";
        }// liberazione delle risorse occupate dal risultato
        $result->free();

}
$connessione->close();
