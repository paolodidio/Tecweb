<?php require_once("config.php"); ?>

<?php

// aggiunta di una pianta al carrello
if(isset($_GET['add'])) {

    $query = query("SELECT * FROM piante WHERE pianta_id=" . escape_string($_GET['add']) . " ");
    confirm($query);

    while($row = fetch_array($query)){

        if($row['pianta_qt'] != $_SESSION['product_' . $_GET['add']]){
            $_SESSION['product_' . $_GET['add']] += 1;
            redirect("../public/checkout.php");
        }
        else {
            set_message("Sono rimaste solo " . $row['pianta_qt' . " piante"]);
            redirect("../public/checkout.php");
        }

    }

}

// decremento della quantità di una pianta nel carrello
if(isset($_GET['remove'])) {

    $_SESSION['product_' . $_GET['remove']]--;

    if($_SESSION['product_' . $_GET['remove']] < 1) {
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);
        redirect("../public/checkout.php");
    }
    else {
        redirect("../public/checkout.php");
    }

}

// rimozione di una pianta dal carrello
if(isset($_GET['delete'])) {

    $_SESSION['product_' . $_GET['delete']] = 0;

    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);

    redirect("../public/checkout.php");

}

// ritorna il riepilogo del carrello
function cart() {

$total = 0;
$tot_quant = 0;

$item_name = 1;
$item_number = 1;
$amount = 1;
$quantity = 1;

foreach($_SESSION as $name => $value) {

if($value > 0) {

if(substr($name, 0, 8) == "product_") {

$length = strlen($name);

$id = substr($name, 8, $length);

$query = query("SELECT * FROM piante WHERE pianta_id = " . escape_string($id) . "");
confirm($query);

while($row = fetch_array($query)) {

$sub = $row['prezzo']*$value;

$tot_quant += $value;

$product = <<<DELIMETER

<tr>
    <td>{$row['nome']}</td>
    <td>{$row['prezzo']} €</td>
    <td>{$value}</td>
    <td>{$sub} €</td>
    <td><a href="../resources/carrello.php?remove={$row['pianta_id']}"><img src="../public/images/remove.png" alt="Rimuovi pianta"></a><a href="../resources/carrello.php?add={$row['pianta_id']}"><img src="../public/images/add.png" alt="Aggiungi pianta"></a><a href="../resources/carrello.php?delete={$row['pianta_id']}"><img src="../public/images/delete.png" alt="Cancella pianta"></a></td>
</tr>

DELIMETER;

echo $product;

$item_name++;
$item_number++;
$amount++;
$quantity++;

}

$_SESSION['item_total'] = $total += $sub;
$_SESSION['item_quantity'] = $tot_quant;

}

}

}

}

// mostra il bottone di acquisto 
function pay() {

if(isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >= 1) {

$payment_button = <<<DELIMETER

<a id="pay-button" href="conferma.php?amount={$_SESSION['item_total']}">Conferma pagamento</a>

DELIMETER;

echo $payment_button;

}

}






?>
