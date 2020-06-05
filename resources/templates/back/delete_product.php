<?php require_once("../../config.php");

if(isset($_GET['id'])) {

    $query = query("DELETE FROM piante WHERE pianta_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    set_message("Pianta eliminata");

    redirect("../../../public/admin/index.php?prodotti");

}
else {
    redirect("../../../public/admin/index.php?prodotti");
}


?>
