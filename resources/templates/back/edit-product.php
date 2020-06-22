
  <?php

  edit_product();

  if(isset($_GET['id'])) {

    $query = query("SELECT * FROM piante WHERE pianta_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    while ($row = fetch_array($query)) {

      $nome = escape_string($row['nome']);
      $genere = escape_string($row['genere']);
      $specie = escape_string($row['specie']);
      $famiglia = escape_string($row['famiglia']);
      $interno = escape_string($row['interno']);
      $fioritura = escape_string($row['fioritura']);
      $colore = escape_string($row['colore']);
      $hardiness = escape_string($row['hardiness']);
      $illuminazione = escape_string($row['illuminazione']);
      $prezzo = escape_string($row['prezzo']);
      $descrizione = escape_string($row['descrizione']);
      $pianta_qt = escape_string($row['pianta_qt']);
      $cat_id = escape_string($row['cat_id']);
      $pianta_img = escape_string($row['pianta_img']);

    }

  }


  ?>

  <div class="edit-product">

    <h1 class="admin-title">Modifica dati pianta</h1>

    <form action="" method="post" enctype="multipart/form-data">

      <div class=first-col>

        <div class="edit-input">
          <label for="nome">Nome pianta</label>
          <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>">
        </div>

        <div class="edit-input">
          <label for="genere">Genere</label>
          <input type="text" name="genere" class="form-control" value="<?php echo $genere; ?>">
        </div>

        <div class="edit-input">
          <label for="specie">Specie</label>
          <input type="text" name="specie" class="form-control" value="<?php echo $specie; ?>">
        </div>

        <div class="edit-input">
          <label for="famiglia">Famiglia</label>
          <input type="text" name="famiglia" class="form-control" value="<?php echo $famiglia; ?>">
        </div>

        <div class="edit-input">
          <label for="colore">Colore fiori</label>
          <input type="text" name="colore" class="form-control" value="<?php echo $colore; ?>">
        </div>

      </div>

      <div class="second-col">

        <div class="edit-input">
          <label for="descrizione">Descrizione pianta</label>
          <textarea name="descrizione" id="" cols="30" rows="10" class="form-control"><?php echo $descrizione; ?></textarea>
        </div>

        <div class="select-input">
          <label for="interno">Da interno</label>
          <select name="interno" id="" class="form-control">
            <option value="0">Si</option>
            <option value="1">No</option>
          </select>
        </div>

        <div class="select-input">
          <label for="hardiness" xml:lang="en">Hardiness</label>
          <select name="hardiness" id="" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
          </select>
        </div>

        <div class="select-input">
          <label for="fioritura">Fioritura</label>
          <select name="fioritura" id="" class="form-control">
            <option value="Primavera">Primavera</option>
            <option value="Estate">Estate</option>
            <option value="Autunno">Autunno</option>
            <option value="Inverno">Inverno</option>
          </select>
        </div>

        <div class="select-input">
          <label for="cat_id">Categoria</label>
          <select name="cat_id" id="" class="form-control">
            <option value="<?php echo $cat_id; ?>"><?php echo show_cat_name($cat_id); ?></option>
            <?php show_categories_admin(); ?>
          </select>
        </div>

      </div>

      <div class="first-col">

        <div class="check-input">
          <label id="check-title" for="illuminazione">Illuminazione</label>
          <input type="checkbox" id="" name="illuminazione" value="Pieno sole">
          <label for="sole">Pieno sole</label><br>
          <input type="checkbox" id="" name="illuminazione" value="Ombra">
          <label for="ombra">Ombra</label><br>
          <input type="checkbox" id="" name="illuminazione" value="Mezz'ombra">
          <label for="mezza">Mezz'ombra</label>
        </div>

        <div class="edit-input2">
          <label for="prezzo">Prezzo</label>
          <input type="number" name="prezzo" class="form-control" size="60" value="<?php echo $prezzo; ?>">
        </div>

        <div class="edit-input2">
          <label for="pianta_qt">Quantità</label>
          <input type="number" name="pianta_qt" class="form-control" size="60" value="<?php echo $pianta_qt; ?>">
        </div>
      </div>

      <div class="second-col">
        <div class="edit-input2">
          <label for="pianta_img">Immagine pianta</label>
          <input type="file" name="file">
        </div>


        <div class="update-button">
          <input type="submit" name="update" value="Modifica">
        </div>
      </div>

    </form>

  </div>