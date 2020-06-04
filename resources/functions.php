<?php

function set_message($msg){

    if(!empty($msg)){
        $_SESSION['message'] = $msg;
    }
    else {
        $msg = "";
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

    if(isset($_POST['reg_user'])){

        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);

        $query = query("SELECT * FROM utenti WHERE email = '{$email}' AND password = '{$password}' ");
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




// ******************************** BACK END ******************************


































?>
