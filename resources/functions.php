<?php

function set_message($msg){

    if(!empty($msg)){
        $_SESSION['message'] = $msg;
    }

}

function display_message(){

    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

}


function redirect($location){

    header("Location: $location");

}

function query($sql){

    global $connection;

    return mysqli_query($connection, $sql);

}

function confirm($result){

    global $connection;

    if(!$result) {
        die("QUERY FAILED " . mysqli_error($connection));
    }

}

function escape_string($string) {

    global $connection;

    return mysqli_real_escape_string($connection, $string);

}

function fetch_array($result){

    return mysqli_fetch_array($result);

}

// ************************** FRONT END **********************************

function get_products(){

$query = query("SELECT * FROM piante");

confirm($query);

while($row = fetch_array($query)){

$product = <<<DELIMETER
<li>
  <div class="plant-preview">
    <div class="plant-preview-description">
      <div class="plant-preview-description-name">
        <p class="bold">{$row['nome']}</p>
        <p>{$row['genere']}</p>
      </div>
      <div class="plant-preview-description-price">
        <p class="price bold">{$row['prezzo']} €</p>
      </div>
    </div>
    <div class="plant-preview-image">
      <a href="plantDetail.php?id={$row['pianta_id']}"><img src="images/plants/2383330382.jpg" alt="Maggiori informazioni"></a>
    </div>
    <a class="btn btn-primary" target="_blank" href="carrello.php?add={$row['pianta_id']}">Aggiungi al carrello</a>
  </div>
</li>
DELIMETER;

echo $product;

}

}

function get_categories(){

$query = query("SELECT * FROM categorie");
confirm($query);

while($row = fetch_array($query)) {

$categories_links = <<<DELIMETER

<a href='#'><li class='interno'>{$row['cat_title']}</li></a>

DELIMETER;

echo $categories_links;

}

}


function login_user(){

    if(isset($_POST['log_user'])){

        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);

        $query = query("SELECT * FROM utenti WHERE email = '$email' AND password = '$password' ");
        confirm($query);

        if(mysqli_num_rows($query) == 0){
            set_message("La tua password o la tua email sono sbagliate!");
            redirect("login.php");
        }
        else{
            redirect("profile.php");
        }

    }

}

function reg_user(){


// connect to the database
    $connessione = new mysqli('localhost', 'root', 'root', 'tecweb');

// REGISTER USER
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $error=false;
        $email = mysqli_real_escape_string($connessione, $_POST['email']);
        $password_1 = mysqli_real_escape_string($connessione, $_POST['password']);
        $password_2 = mysqli_real_escape_string($connessione, $_POST['password2']);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($email)) {
            $error=true;
            set_message("Email is required");
        }
        if (empty($password_1)) {
            $error=true;
            set_message("Password is required");
        }
        if ($password_1 != $password_2) {
            $error=true;
            set_message("The two passwords do not match");
        }



        // first check the database to make sure
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM utenti WHERE email='$email'  LIMIT 1";
        $result = mysqli_query($connessione, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            $error=true;
           set_message("Email already exist");
           redirect("registrazione.php");
        }

        // Finally, register user if there are no errors in the form
        if ($error == false) {
            $password = md5($password_1);//encrypt the password before saving in the database

            $query = "INSERT INTO utenti (email, password) 
  			  VALUES('$email', '$password')";
            mysqli_query($connessione, $query);
            $_SESSION['email'] = $email;
            redirect("index.php");
        } else redirect("registrazione.php");
    }
    $connessione->close();

}



// ******************************** BACK END ******************************


































?>
