
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

  <div id="EditProduct">

    <h1 class="admin-title">Modifica dati pianta</h1>

    <form class="edit-form" action="" method="post" enctype="multipart/form-data">

      <legend>Modifica prodotto</legend>

      <div>
        <div class="edit-input-group">
          <label for="nome">Nome pianta</label>
          <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>" required>

          <label for="genere">Genere</label>
          <input type="text" name="genere" class="form-control" value="<?php echo $genere; ?>"required>

          <label for="specie">Specie</label>
          <input type="text" name="specie" class="form-control" value="<?php echo $specie; ?>" required>

          <label for="famiglia">Famiglia</label>
          <input type="text" name="famiglia" class="form-control" value="<?php echo $famiglia; ?>"required>

          <label for="colore">Colore fiori</label>
          <input type="text" name="colore" class="form-control" value="<?php echo $colore; ?>"required>

          <label for="prezzo">Prezzo</label>
          <input type="number" name="prezzo" class="form-control" size="60" value="<?php echo $prezzo; ?>" required>

          <label for="pianta_qt">Quantità</label>
          <input type="number" name="pianta_qt" class="form-control" size="60" value="<?php echo $pianta_qt; ?>" required>

          <label for="pianta_img">Immagine pianta</label>
          <input type="file" name="file" required>
        </div>
      </div>

      <div>
        <div class="edit-input-group">
          <label for="descrizione">Descrizione pianta</label>
          <textarea name="descrizione" id="" cols="30" rows="10" class="form-control" required><?php echo $descrizione; ?></textarea>
        </div>
        <div class="select-input-group">
          <label for="interno">Da interno</label>
          <select name="interno" id="" class="form-control" required>
            <option value="0">Si</option>
            <option value="1">No</option>
          </select>

          <label for="hardiness" xml:lang="en">Hardiness</label>
          <select name="hardiness" id="" class="form-control" required>
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

          <label for="fioritura">Fioritura</label>
          <select name="fioritura" id="" class="form-control"required>
            <option value="Primavera">Primavera</option>
            <option value="Estate">Estate</option>
            <option value="Autunno">Autunno</option>
            <option value="Inverno">Inverno</option>
          </select>

          <label for="cat_id">Categoria</label>
          <select name="cat_id" id="" class="form-control" required>
            <option value="<?php echo $cat_id; ?>"><?php echo show_cat_name($cat_id); ?></option>
            <?php show_categories_admin(); ?>
          </select>

          <label for="illuminazione">Illuminazione</label>
          <select name ="illuminazione" id="" required>
              <option value="Pieno sole">Pieno sole</option>
              <option value="Mezza ombra">Mezza ombra</option>
              <option value="Ombra">Ombra</option>
          </select>
        </div>
      </div>

      <div>
        <input class="submit-button" type="submit" name="update" value="Modifica">
        <input class="reset-button" type="button" value="Reset" onClick="this.form.reset()" />
      </div>

    </form>

  </div>