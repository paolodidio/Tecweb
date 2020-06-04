<?php
session_start();

// initializing variables
$email    = "";
//$errors = array();

// connect to the database
$connessione = new mysqli('localhost', 'root', 'root', 'tecweb');

// REGISTER USER
if (isset($_POST['test'])) {


    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM utente";
    $result = mysqli_query($connessione, $user_check_query);

    if($result->num_rows > 0) {
        echo"<p>pre test</p>";
    // ciclo dei record restituiti dalla query
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                echo"<p>rigaaaa</p>";
                echo $row['EMAIL'] ." ". $row['PASSWD'];
    }// liberazione delle risorse occupate dal risultato
    $result->free();
    }
    echo"<p> yo test</p>";

}
$connessione->close();
