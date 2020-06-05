<?php require_once("../../config.php");

if(isset($_GET['id'])) {

    $query = query("DELETE FROM ordini WHERE ordine_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    set_message("Ordine cancellato");

    redirect("../../../public/admin/index.php?orders");

}
else {
    redirect("../../../public/admin/index.php?orders");
}


?>
