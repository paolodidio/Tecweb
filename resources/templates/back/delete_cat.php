<?php require_once("../../config.php");

if(isset($_GET['id'])) {

    $query = query("DELETE FROM categorie WHERE cat_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    set_message("Categoria eliminata");

    redirect("../../../public/admin/index.php?add-categoria");

}
else {
    redirect("../../../public/admin/index.php?add-categoria");
}


?>
