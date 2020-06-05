<?php

session_start();

// initializing variables
$email = "";
//$errors = array();

// connect to the database
$connessione = new mysqli('localhost', 'root', 'root', 'tecweb');

// REGISTER USER
if (isset($_POST['log_user'])) {
    // receive all input values from the form
    $email = mysqli_real_escape_string($connessione, $_POST['email']);
    $password = mysqli_real_escape_string($connessione, $_POST['password']);


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }


    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM utente WHERE EMAIL='$email'  LIMIT 1";
    $result = mysqli_query($connessione, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if (! $user) { // if user doesn't exist
            echo("This email has not been registered");
    }

    // Finally, register user if there are no errors in the form
    // if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database
    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM utente WHERE EMAIL='$email' and PASSWD = '$password'";
    echo $user_check_query;
    $result = mysqli_query($connessione, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if (! $user) { // if password is wrong doesn't exist
        echo("Wrong password");
    }

    session_regenerate_id();
    echo "<br/>";
    $_SESSION['user'] = $email;
    echo $_SESSION['user']. "\n";
    echo "<br/>";
    echo 'la password è giusta guagliò';
    header('location: ../html/home.php');
    // }
}
$connessione->close();
//session_destroy();