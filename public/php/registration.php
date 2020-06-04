<?php
session_start();

// initializing variables
$email    = "";
//$errors = array();

// connect to the database
$connessione = new mysqli('localhost', 'root', 'root', 'mio');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $email = mysqli_real_escape_string($connessione, $_POST['email']);
    $password_1 = mysqli_real_escape_string($connessione, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($connessione, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM utente WHERE EMAIL='$email'  LIMIT 1";
    $result = mysqli_query($connessione, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['EMAIL'] === $email) {
            echo("email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
   // if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO utente (email, PASSWD) 
  			  VALUES('$email', '$password')";
        mysqli_query($connessione, $query);
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: ../html/home.php');
   // }
}
$connessione->close();
//session_destroy();