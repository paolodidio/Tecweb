<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

  <?php

$send_order = query("INSERT INTO ordini (ordine_tot) VALUES('{$_GET['amount']}')");
$last_id = last_id();
confirm($send_order);

  foreach ($_SESSION as $name => $value) {

    if($value > 0 ) {

      if(substr($name, 0, 8 ) == "product_") {

        $length = strlen($name);
        $id = substr($name, 8 , $length);

        $query = query("SELECT * FROM piante WHERE pianta_id= " . escape_string($id) . " ");
        confirm($query);

        while($row = fetch_array($query)) {

          $insert_report = query("INSERT INTO report (pianta_id, prezzo, pianta_qt, ordine_id, nome) VALUES('{$id}', '{$row['prezzo']}', '{$value}', '{$last_id}', '{$row['nome']}')");
          confirm($insert_report);

          $new_qt = $row['pianta_qt'] - $value;

          $modify_qt = query("UPDATE piante SET pianta_qt = '{$new_qt}' WHERE pianta_id=$id ");
          confirm($modify_qt);

        }

      }

    }

  }
  session_destroy();

  ?>

  <p class="page-title">Grazie per l'acquisto!</p>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
