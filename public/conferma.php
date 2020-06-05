<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "intro.php"); ?>

  <?php

  foreach ($_SESSION as $name => $value) {

    if($value > 0 ) {

      if(substr($name, 0, 8 ) == "product_") {

        $length = strlen($name);
        $id = substr($name, 8 , $length);

        $send_order = query("INSERT INTO ordini (ordine_tot) VALUES('{$_GET['amount']}')");
        $last_id = last_id();
        confirm($send_order);

        $query = query("SELECT * FROM piante WHERE pianta_id= " . escape_string($id) . " ");
        confirm($query);

        while($row = fetch_array($query)) {

          $insert_report = query("INSERT INTO report (pianta_id, prezzo, pianta_qt, ordine_id, nome) VALUES('{$id}', '{$row['prezzo']}', '{$value}', '{$last_id}', '{$row['nome']}')");
          confirm($insert_report);

        }

      }

    }

  }
  session_destroy();

  ?>

  <h1>Grazie per l'acquisto!</h1>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
