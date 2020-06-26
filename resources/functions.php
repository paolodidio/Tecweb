<?php

//*************************** SYSTEM FUNCTIONS ****************************

// ritorna l'ultimo id
function last_id() {

    global $connection;

    return mysqli_insert_id($connection);

}

// permette di inserire un messaggio da far visualizzare
function set_message($msg){

    if(!empty($msg)){
        $_SESSION['message'] = $msg;
    }

}

// fa visualizzare un messaggio
function display_message(){

    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

}

// riporta ad una pagina
function redirect($location){

    header("Location: $location");

}

// fa una query al database
function query($sql){

    global $connection;

    return mysqli_query($connection, $sql);

}

// conferma la query
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

/* modifica dinamicamente il tag title delle varie pagine */

function show_title($page) {

    $title = " ";

    switch ($page){
    case '/Tecweb/public/index.php':
        $title= 'Succulente';
        break;
    
    case '/Tecweb/public/categorie.php':
        $id = $_GET['id'];
        $cat_id = show_cat_name($id);
        $title= "{$cat_id} | Succulente";
        break;

    case '/Tecweb/public/checkout.php':
        $title= 'Checkout | Succulente';
        break;

    case '/Tecweb/public/conferma.php':
        $title= 'Conferma acquisto | Succulente';
        break;

    case '/Tecweb/public/contatti.php':
        $title= 'Contatti | Succulente';
        break;

    case '/Tecweb/public/login.php':
        $title= 'Accedi | Succulente';
        break;

    case '/Tecweb/public/piante.php':
        $title= ' Catalogo Piante | Succulente';
        break;

    case '/Tecweb/public/plantDetail.php':
        $id = $_GET['id'];
        $query = query("SELECT * FROM piante WHERE pianta_id={$id}");
        confirm($query);
        $result = fetch_array($query);
        $title= "Pianta {$result['nome']} | Succulente";
        break;

    case '/Tecweb/public/profile.php':
        $title= 'Profilo | Succulente';
        break;

    case '/Tecweb/public/registrazione.php':
        $title= 'Registrati | Succulente';
        break;

    case '/Tecweb/public/sudinoi.php':
        $title= 'Su di noi | Succulente';
        break;

    }  

    return $title;

}

/* modifica dinamicamente le descrizioni delle varie pagine */

function show_desc($page) {

    $desc = " ";

    switch ($page){
    case '/Tecweb/public/index.php':
        $desc= 'E-commerce di piante succulente';
        break;
    
    case '/Tecweb/public/categorie.php':
        $desc= 'Pagina con il catalogo delle piante divise per categorie';
        break;

    case '/Tecweb/public/checkout.php':
        $desc= 'Pagina con il sommario del carrello';
        break;

    case '/Tecweb/public/conferma.php':
        $desc= 'Pagina di conferma acquisto';
        break;

    case '/Tecweb/public/contatti.php':
        $desc= 'Pagina con i contatti degli amministratori del sito';
        break;

    case '/Tecweb/public/login.php':
        $desc= 'Pagina di login al sito';
        break;

    case '/Tecweb/public/piante.php':
        $desc= 'Pagina con il catalogo delle piante disponibili';
        break;

    case '/Tecweb/public/plantDetail.php':
        $desc= 'Pagina con i dettagli della pianta';
        break;

    case '/Tecweb/public/profile.php':
        $desc= 'Pagina con il profilo utente';
        break;

    case '/Tecweb/public/registrazione.php':
        $desc= 'Pagina di registrazione di un utente';
        break;

    case '/Tecweb/public/sudinoi.php':
        $desc= 'Pagina con breve descrizione del sito';
        break;

    }  

    return $desc;

}

/* ritorna l'id usato come ancora per saltare il menu per l'accessibilità */
function skip_to($page) {

    $main = " ";

    switch ($page){
    case '/Tecweb/public/index.php':
        $main= '#Header';
        break;
    
    case '/Tecweb/public/categorie.php':
        $main= '#PlantCat';
        break;

    case '/Tecweb/public/checkout.php':
        $main= '#Checkout';
        break;

    case '/Tecweb/public/conferma.php':
        $main= '#Conferma';
        break;

    case '/Tecweb/public/contatti.php':
        $main= '#Contacts';
        break;

    case '/Tecweb/public/login.php':
        $main= '#LoginPage';
        break;

    case '/Tecweb/public/piante.php':
        $main= '#PlantShop';
        break;

    case '/Tecweb/public/plantDetail.php':
        $main= '#PlantDetail';
        break;

    case '/Tecweb/public/profile.php':
        $main= '#Profile';
        break;

    case '/Tecweb/public/registrazione.php':
        $main= '#Register';
        break;

    case '/Tecweb/public/sudinoi.php':
        $main= '#Sudinoi';
        break;
    
    case '/Tecweb/public/admin/index.php':
        $main= '#AdminContent';
        break;

    }

    return $main;

}

// ritorna il path per le immagini delle piante
function display_image($image) {

    return "uploads" . DS . $image;

}

// fa visualizzare la lista delle piante presenti nel database
function get_products(){

$query = query("SELECT * FROM piante WHERE pianta_qt >= 1");
confirm($query);

// per la paginazione 
$rows = mysqli_num_rows($query);

if(isset($_GET['page'])) {
$page = preg_replace('#[^0-9]#', '', $_GET['page']);
}
else {
$page = 1;
}

$perPage = 9;
$lastPage = ceil($rows / $perPage);

if($page < 1) {
$page = 1;
}
elseif($page > $lastPage) {
$page = $lastPage;
}

$middleNumbers = '';
$sub1 = $page - 1;
$sub2 = $page - 2;
$add1 = $page + 1;
$add2 = $page + 2;

if($page == 1) {
$middleNumbers .= '<li class="active">' .$page. '</li>';
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';
}
elseif($page == $lastPage) {
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
$middleNumbers .= '<li class="active">' .$page. '</li>';
}
elseif($page > 2 && $page < ($lastPage - 1)) {
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$sub2.'">' .$sub2. '</a></li>';
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
$middleNumbers .= '<li class="active">' .$page. '</li>';
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$add2.'">' .$add2. '</a></li>';
}
elseif($page > 1 && $page < $lastPage) {
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
$middleNumbers .= '<li class="active">' .$page. '</li>';
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';
}

$output = '';

if($page != 1) {
$prev = $page - 1;
$output .= '<li class="back"><a href="' .$_SERVER['PHP_SELF'].'?page='.$prev.'">Indietro</a></li>';
}

$output .= $middleNumbers;

if($page != $lastPage) {
$next = $page + 1;
$output .= '<li class="next"><a href="' .$_SERVER['PHP_SELF'].'?page='.$next.'">Avanti</a></li>';
}

// mostro i prodotti

$limit = 'LIMIT ' . ($page - 1) * $perPage . ',' . $perPage; 

$query2 = query("SELECT * FROM piante WHERE pianta_qt >= 1 $limit");
confirm($query2);

echo "<ul class='plants'>";

while($row = fetch_array($query2)){

$pianta_img = display_image($row['pianta_img']);

$product = <<<DELIMETER
<li>
    <div class="plant-preview">
        <div class="plant-preview-desc">
            <p class="plant-name">{$row['nome']}</p>
            <p class="plant-price">{$row['prezzo']} &euro;</p>
            <a class="colored-button" href="../public/plantDetail.php?id={$row['pianta_id']}">Maggiori informazioni</a>
        </div>
        <div class="plant-preview-image">
            <a href="../public/plantDetail.php?id={$row['pianta_id']}" tabindex="-1"><img src="../resources/{$pianta_img}" alt="Immagine della pianta {$row['nome']}"/></a>
        </div>
    </div>
</li>
DELIMETER;

echo $product;

}
if($rows > $perPage) {
echo "</ul>";
echo "<div class='pagination-wrap'><ul class='pagination'>$output</ul>";
if($lastPage != 1) {
echo "<p>Pagina $page di $lastPage</p></div>";
}
}
else {
echo "</ul>";  
}

}

// ritorna la lista delle categorie presenti nel database, con i rispettivi link
function get_categories(){

$query = query("SELECT * FROM categorie");
confirm($query);

while($row = fetch_array($query)) {

$categories_links = <<<DELIMETER

<li><a href='../public/categorie.php?id={$row['cat_id']}'>{$row['cat_title']}</a></li>

DELIMETER;

echo $categories_links;

}

}

// ritorna la lista di piante per una determinata categoria
function get_cat_products(){

$query = query("SELECT * FROM piante WHERE cat_id = " . escape_string($_GET['id']) . " AND pianta_qt >= 1");
confirm($query);

// per la paginazione 
$rows = mysqli_num_rows($query);

if(isset($_GET['page'])) {
$page = preg_replace('#[^0-9]#', '', $_GET['page']);
}
else {
$page = 1;
}

$perPage = 9;
$lastPage = ceil($rows / $perPage);

if($page < 1) {
$page = 1;
}
elseif($page > $lastPage) {
$page = $lastPage;
}

$middleNumbers = '';
$sub1 = $page - 1;
$sub2 = $page - 2;
$add1 = $page + 1;
$add2 = $page + 2;

if($page == 1) {
$middleNumbers .= '<li class="active">' .$page. '</li>';
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$add1.'&id='.escape_string($_GET['id']).'">' .$add1. '</a></li>';
}
elseif($page == $lastPage) {
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$sub1.'&id='.escape_string($_GET['id']).'">' .$sub1. '</a></li>';
$middleNumbers .= '<li class="active">' .$page. '</li>';
}
elseif($page > 2 && $page < ($lastPage - 1)) {
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$sub2.'&id='.escape_string($_GET['id']).'">' .$sub2. '</a></li>';
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$sub1.'&id='.escape_string($_GET['id']).'">' .$sub1. '</a></li>';
$middleNumbers .= '<li class="active">' .$page. '</li>';
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$add1.'&id='.escape_string($_GET['id']).'">' .$add1. '</a></li>';
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$add2.'&id='.escape_string($_GET['id']).'">' .$add2. '</a></li>';
}
elseif($page > 1 && $page < $lastPage) {
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$sub1.'&id='.escape_string($_GET['id']).'">' .$sub1. '</a></li>';
$middleNumbers .= '<li class="active">' .$page. '</li>';
$middleNumbers .= '<li><a href="' .$_SERVER['PHP_SELF'].'?page='.$add1.'&id='.escape_string($_GET['id']).'">' .$add1. '</a></li>';
}

$output = '';

if($page != 1) {
$prev = $page - 1;
$output .= '<li class="back"><a href="' .$_SERVER['PHP_SELF'].'?page='.$prev.'&id='.escape_string($_GET['id']).'">Indietro</a></li>';
}

$output .= $middleNumbers;

if($page != $lastPage) {
$next = $page + 1;
$output .= '<li class="next"><a href="' .$_SERVER['PHP_SELF'].'?page='.$next.'&id='.escape_string($_GET['id']).'">Avanti</a></li>';
}

// mostro i prodotti

$limit = 'LIMIT ' . ($page - 1) * $perPage . ',' . $perPage; 

$query2 = query("SELECT * FROM piante WHERE cat_id = " . escape_string($_GET['id']) . " AND pianta_qt >= 1 $limit");
confirm($query2);

echo "<ul class='plants'>";


while($row = fetch_array($query2)) {

$pianta_img = display_image($row['pianta_img']);

$cat_products = <<<DELIMETER
<li>
    <div class="plant-preview">
        <div class="plant-preview-desc">
            <p class="plant-name">{$row['nome']}</p>
            <p class="plant-price">{$row['prezzo']} &euro;</p>
            <a class="colored-button" href="../public/plantDetail.php?id={$row['pianta_id']}">Maggiori informazioni</a>
        </div>
        <div class="plant-preview-image">
            <a href="../public/plantDetail.php?id={$row['pianta_id']}" tabindex="-1"><img src="../resources/{$pianta_img}" alt="Immagine della pianta {$row['nome']}"/></a>
        </div>
    </div>
</li>

DELIMETER;

echo $cat_products;

}

if($rows > $perPage) {
echo "</ul>";
echo "<div class='pagination-wrap'><ul class='pagination'>$output</ul>";
if($lastPage != 1) {
echo "<p>Pagina $page di $lastPage</p></div>";
}
}
else {
echo "</ul>";  
}

}

// mostra la pianta nel dettaglio
function show_plant() {

$query = query("SELECT * FROM piante WHERE pianta_id =" . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)) {

$pianta_img = display_image($row['pianta_img']); 
$interno = '';
if($row['interno'] == '0') {
$interno = 'Si';
}
else{
$interno = 'No';    
}

$plant = <<<DELIMITER

<div class="plant-detail-container">

    <img src="../resources/{$pianta_img}" alt="immagine pianta {$row['nome']}" />

    <div class="plant-desc-panel">
        <p class="plant-detail-name">{$row['nome']}</p>
        <p class="plant-detail-spec">Famiglia: <span>{$row['famiglia']}</span></p>
        <p class="plant-detail-spec">Genere: <span>{$row['genere']}</span></p>
        <p class="plant-detail-spec">Specie: <span>{$row['specie']}</span></p>
        <p class="plant-detail-desc">{$row['descrizione']}</p>
        <p class="plant-detail-spec">Prezzo: <span>{$row['prezzo']} &euro;</span></p>
        <a class="confirm-button" href="../resources/carrello.php?add={$row['pianta_id']}">Aggiungi al carrello</a>
    </div>

    <div class="plant-info-panel">
        <dl>
        <dt>Periodo di fioritura</dt>
        <dd>{$row['fioritura']}</dd>
        <dt>Colore fiori</dt>
        <dd>{$row['colore']}</dd>
        <dt>Illuminazione</dt>
        <dd>{$row['illuminazione']}</dd>
        <dt xml:lang="en">Hardiness</dt>
        <dd>{$row['hardiness']}</dd>
        <dt>Da interno</dt>
        <dd>{$interno}</dd>
        </dl>
    </div>

</div>

DELIMITER;

echo $plant;

}

}

// permette il login dell'utente
function login_user(){

    if(isset($_POST['log_user'])){

        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);

        if (empty($email)) {
            set_message("Inserisci un'email valida");
        }
        if (empty($password)) {
            set_message("Inserisci la password");
        }


        $query = query("SELECT * FROM utenti WHERE email = '$email' AND password = '$password' ");
        confirm($query);

        if(mysqli_num_rows($query) == 0){
            set_message("La tua password o la tua email sono sbagliate!");
            redirect("login.php");
        }
        else{
            $row = fetch_array($query);
            $_SESSION['user'] = $email;

            if ($row['admin'] == 0) {
                $_SESSION['admin'] = true;
                redirect("admin");
            }
            else {
                redirect("index.php");
            }
        }

    }

}

// permette la registrazione di un nuovo utente
function reg_user(){

    if (isset($_POST['reg_user'])) {

        $error=false;
        $email = escape_string($_POST['email']);
        $password_1 = escape_string($_POST['password']);
        $password_2 = escape_string($_POST['password2']);
        $admin = 1;

        if (empty($email)) {
            $error=true;
            set_message("Inserisci un'email valida");
        }
        if (empty($password_1)) {
            $error=true;
            set_message("Inserisci una password");
        }
        if ($password_1 != $password_2) {
            $error=true;
            set_message("Le due password non coincidono");
        }

        $user_check_query = query("SELECT * FROM utenti WHERE email='$email'  LIMIT 1");
        confirm($user_check_query);
        $user = fetch_array($user_check_query);

        if ($user) { 
            $error=true;
            set_message("Esiste già un utente con questa email");
            redirect("registrazione.php");
        }

        if ($error == false) {
            $query = query("INSERT INTO utenti (email, password) VALUES('$email', '$password_1')");
            confirm($query);
            $_SESSION['user'] = $email;
            redirect("index.php");
        } 
        else {
            redirect("registrazione.php");
        }
    }

}

// mostra riepilogo ordine
function show_orders() {

$users = query("SELECT * FROM utenti WHERE `email`= '{$_SESSION['user']}' ");
confirm($users);

$result = fetch_array($users);
$user_id = $result['utente_id'];

$query = query("SELECT * FROM ordini WHERE utente_id={$user_id}");
confirm($query);

while($row = fetch_array($query)){

$orders = <<<DELIMITER

<tr>
    <td>{$row['ordine_id']}</td>
    <td>{$row['ordine_tot']} &euro;</td>
</tr>

DELIMITER;

echo $orders;

}

}

// ******************************** BACK END ******************************

// ritorna il body della pagina di admin
function show_content() {

    if($_SERVER['REQUEST_URI'] == "/Tecweb/public/admin/" || $_SERVER['REQUEST_URI'] == "/Tecweb/public/admin/index.php" ) {
        include(TEMPLATE_BACK . "/content.php");
    }

    if(isset($_GET['orders'])) {
        include(TEMPLATE_BACK . "/orders.php");
    }

    if(isset($_GET['prodotti'])) {
        include(TEMPLATE_BACK . "/prodotti.php");
    }

    if(isset($_GET['add-product'])) {
        include(TEMPLATE_BACK . "/add-product.php");
    }

    if(isset($_GET['edit-product'])) {
        include(TEMPLATE_BACK . "/edit-product.php");
    }

    if(isset($_GET['add-categoria'])) {
        include(TEMPLATE_BACK . "/add-categoria.php");
    }

    if(isset($_GET['users'])) {
        include(TEMPLATE_BACK . "/users.php");
    }

    if(isset($_GET['add-user'])) {
        include(TEMPLATE_BACK . "/add-user.php");
    }

    if(isset($_GET['edit-user'])) {
        include(TEMPLATE_BACK . "/edit-user.php");
    }

    if(isset($_GET['reports'])) {
        include(TEMPLATE_BACK . "/reports.php");
    }

}

// ritorna la lista degli ordini effettuati dagli utenti
function display_orders() {

$query = query("SELECT * FROM ordini");
confirm($query);

while($row = fetch_array($query)){

$orders = <<<DELIMITER

<tr>
    <td>{$row['ordine_id']}</td>
    <td>{$row['ordine_tot']} &euro;</td>
    <td><a href="../../resources/templates/back/delete_order.php?id={$row['ordine_id']}">Elimina</a></td>
</tr>

DELIMITER;

echo $orders;

}

}

// ritorna la lista di prodotti presenti nel database
function admin_products() {

$query = query("SELECT * FROM piante");

confirm($query);

while($row = fetch_array($query)){

$cat_title = show_cat_name($row['cat_id']);

$product = <<<DELIMETER
<tr>
    <td>{$row['pianta_id']}</td>
    <td>{$row['nome']}</td>
    <td>{$cat_title}</td>
    <td>{$row['prezzo']} &euro;</td>
    <td>{$row['pianta_qt']}</td>
    <td><a href="../../public/admin/index.php?edit-product&#38;id={$row['pianta_id']}">Modifica</a><a href="../../resources/templates/back/delete_product.php?id={$row['pianta_id']}">Elimina</a></td>
</tr>
DELIMETER;

echo $product;

}

}

// permette l'inserimento di una nuova pianta nel database
function add_product() {

    if(isset($_POST['publish'])) {

    $nome = escape_string($_POST['nome']);
    $genere = escape_string($_POST['genere']);
    $specie = escape_string($_POST['specie']);
    $famiglia = escape_string($_POST['famiglia']);
    $interno = escape_string($_POST['interno']);
    $fioritura = escape_string($_POST['fioritura']);
    $colore = escape_string($_POST['colore']);
    $hardiness = escape_string($_POST['hardiness']);
    $illuminazione = escape_string($_POST['illuminazione']);
    $prezzo = escape_string($_POST['prezzo']);
    $descrizione = escape_string($_POST['descrizione']);
    $pianta_qt = escape_string($_POST['pianta_qt']);
    $cat_id = escape_string($_POST['cat_id']);
    $pianta_img = escape_string($_FILES['file']['name']);
    $img_tmp = escape_string($_FILES['file']['tmp_name']);

    move_uploaded_file($img_tmp, UPLOADS . DS . $pianta_img);

    $query = query("INSERT INTO piante(nome, genere, specie, famiglia, interno, fioritura, colore, hardiness, illuminazione, prezzo, descrizione, pianta_qt, cat_id, pianta_img) VALUES('{$nome}', '{$genere}', '{$specie}', '{$famiglia}', '{$interno}', '{$fioritura}', '{$colore}', '{$hardiness}', '{$illuminazione}', '{$prezzo}', '{$descrizione}', '{$pianta_qt}', '{$cat_id}', '{$pianta_img}')");
    confirm($query);

    set_message("Aggiunta nuova pianta");

    redirect("index.php?prodotti");

    }

}

// mostra i nomi delle categorie nel menu a tendina quando si aggiunge una nuova pianta
function show_categories_admin(){

$query = query("SELECT * FROM categorie");
confirm($query);

while($row = fetch_array($query)) {

$categorie_options = <<<DELIMETER

<option value="{$row['cat_id']}">{$row['cat_title']}</option>

DELIMETER;

echo $categorie_options;

}

}

// ritorna il nome della categoria in corrispondenza dell'id inserito nel database
function show_cat_name($cat_id) {

    $query = query("SELECT * FROM categorie WHERE cat_id={$cat_id}");
    confirm($query);

    while ($row = fetch_array($query)) {

    return $row['cat_title'];

    }

}

// permette di modificare i dati di una pianta
function edit_product() {

    if(isset($_POST['update'])) {

    $nome = escape_string($_POST['nome']);
    $genere = escape_string($_POST['genere']);
    $specie = escape_string($_POST['specie']);
    $famiglia = escape_string($_POST['famiglia']);
    $interno = escape_string($_POST['interno']);
    $fioritura = escape_string($_POST['fioritura']);
    $colore = escape_string($_POST['colore']);
    $hardiness = escape_string($_POST['hardiness']);
    $illuminazione = escape_string($_POST['illuminazione']);
    $prezzo = escape_string($_POST['prezzo']);
    $descrizione = escape_string($_POST['descrizione']);
    $pianta_qt = escape_string($_POST['pianta_qt']);
    $cat_id = escape_string($_POST['cat_id']);
    $pianta_img = escape_string($_FILES['file']['name']);
    $img_tmp = escape_string($_FILES['file']['tmp_name']);

    if(empty($pianta_img)) {

        $get_pic = query("SELECT pianta_img FROM piante WHERE pianta_id=" . escape_string($_GET['id']) . "");
        confirm($get_pic);

        while ($row = fetch_array($get_pic)) {
        $pianta_img = $row['pianta_img'];
        }

    }

    move_uploaded_file($img_tmp, UPLOADS . DS . $pianta_img);

    $query = "UPDATE piante SET ";
    $query .= "nome = '{$nome}', ";
    $query .= "genere = '{$genere}', ";
    $query .= "specie = '{$specie}', ";
    $query .= "famiglia = '{$famiglia}', ";
    $query .= "interno = '{$interno}', ";
    $query .= "fioritura = '{$fioritura}', ";
    $query .= "colore = '{$colore}', ";
    $query .= "hardiness = '{$hardiness}', ";
    $query .= "illuminazione = '{$illuminazione}', ";
    $query .= "prezzo = '{$prezzo}', ";
    $query .= "descrizione = '{$descrizione}', ";
    $query .= "pianta_qt = '{$pianta_qt}', ";
    $query .= "cat_id = '{$cat_id}', ";
    $query .= "pianta_img = '{$pianta_img}' ";
    $query .= "WHERE pianta_id=" . escape_string($_GET['id']) . " ";

    $send_query = query($query);

    confirm($send_query);

    set_message("Pianta modificata");

    redirect("index.php?prodotti");

    }

}

// mostra l'elenco delle categorie e dei loro id
function get_cat_admin() {

$query = query("SELECT * FROM categorie");
confirm($query);

while ($row = fetch_array($query)) {

$categoria = <<<DELIMITER

<tr>
    <td>{$row['cat_id']}</td>
    <td>{$row['cat_title']}</td>
    <td><a href="../../resources/templates/back/delete_cat.php?id={$row['cat_id']}">Elimina</a></td>
</tr>

DELIMITER;

echo $categoria;

}

}

// permette di aggiungere una nuova categoria
function add_category() {

    if(isset($_POST['add-categoria'])) {

    $cat_title = escape_string($_POST['cat_title']);

    if(empty($cat_title) || $cat_title == " ") {
        set_message("Dai un nome alla categoria");
    }
    else {
        $query = query("INSERT INTO categorie(cat_title) VALUES('{$cat_title}')");
        confirm($query);

        set_message("Aggiunta categoria");

        redirect("index.php?add-categoria");
    }

    }

}

// ritorna la lista degli utenti
function get_users() {

$query = query("SELECT * FROM utenti");
confirm($query);

while ($row = fetch_array($query)) {

$user = <<<DELIMITER

<tr>
    <td>{$row['utente_id']}</td>
    <td>{$row['email']}</td>
    <td>{$row['admin']}</td>
    <td><a href="../../public/admin/index.php?edit-user&#38;id={$row['utente_id']}">Modifica</a><a href="../../resources/templates/back/delete_user.php?id={$row['utente_id']}">Elimina</a></td>
</tr>

DELIMITER;

echo $user;

}

}

// permette di aggiungere un nuovo utente
function add_user() {

    if(isset($_POST['add_user'])) {

    $email = escape_string($_POST['email']);
    $password = escape_string($_POST['password']);
    $admin = escape_string($_POST['admin']);

    $query = query("INSERT INTO utenti(email, password, admin) VALUES('{$email}', '{$password}', '{$admin}')");
    confirm($query);

    set_message("Utente aggiunto");

    redirect("index.php?users");

    }

}

// permette di modificare i dati di un utente
function edit_user() {

    if(isset($_POST['update_user'])) {

    $email = escape_string($_POST['email']);
    $password = escape_string($_POST['password']);
    $admin = escape_string($_POST['admin']);

    $query = query("UPDATE utenti SET email = '{$email}', password = '{$password}', admin = '{$admin}' WHERE utente_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    set_message("Utente modificato");

    redirect("index.php?users");

    }

}

// ritorna la lista dei report per l'admin
function get_reports() {

$query = query("SELECT * FROM report");
confirm($query);

while($row = fetch_array($query)){

$report = <<<DELIMETER
<tr>
    <td>{$row['report_id']}</td>
    <td>{$row['pianta_id']}</td>
    <td>{$row['nome']}</td>
    <td>{$row['prezzo']} &euro;</td>
    <td>{$row['pianta_qt']}</td>
    <td>{$row['ordine_id']}</td>
    <td><a href="../../resources/templates/back/delete_report.php?id={$row['report_id']}">Elimina</a></td>
</tr>
DELIMETER;

echo $report;

}

}

// conta il numero totale di ordini ricevuti
function tot_orders() {

    $query = query("SELECT COUNT(*) AS tot_ordini FROM ordini");
    confirm($query);

    $result = fetch_array($query);
    echo $result['tot_ordini'];

}

// conta il numero totale di piante
function tot_piante() {

    $query = query("SELECT COUNT(*) AS tot_piante FROM piante");
    confirm($query);

    $result = fetch_array($query);
    echo $result['tot_piante'];

}

// conta il numero totale di categorie
function tot_cat() {

    $query = query("SELECT COUNT(*) AS tot_cat FROM categorie");
    confirm($query);

    $result = fetch_array($query);
    echo $result['tot_cat'];

}

?>
