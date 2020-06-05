<?php require_once("../resources/config.php"); ?>

<?php

if(isset($_GET['add'])) {

    $query = query("SELECT * FROM piante WHERE pianta_id=" . escape_string($_GET['add']) . " ");
    confirm($query);

    while($row = fetch_array($query)){

        if($row['pianta_qt'] != $_SESSION['product_' . $_GET['add']]){
            $_SESSION['product_' . $_GET['add']] += 1;
            redirect("checkout.php");
        }
        else {
            set_message("Sono rimaste solo " . $row['pianta_qt' . " piante"]);
            redirect("checkout.php");
        }

    }

}

if(isset($_GET['remove'])) {

    $_SESSION['product_' . $_GET['remove']]--;

    if($_SESSION['product_' . $_GET['remove']] < 1) {
        redirect("checkout.php");
    }
    else {
        redirect("checkout.php");
    }

}


if(isset($_GET['delete'])) {

    $_SESSION['product_' . $_GET['delete']] = 0;

    redirect("checkout.php");

}

function cart() {

$total = 0;
$tot_quant = 0;

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
    <td>{$row['prezzo']}</td>
    <td>{$value}</td>
    <td>{$sub}</td>
    <td><a href="carrello.php?remove={$row['pianta_id']}">Remove</a><a href="carrello.php?add={$row['pianta_id']}">Add</a><a href="carrello.php?delete={$row['pianta_id']}">Delete</a></td>
</tr>

DELIMETER;

echo $product;

$_SESSION['item_total'] = $total += $sub;
$_SESSION['item_quantity'] = $tot_quant;

}

}

}

}

}





?>
