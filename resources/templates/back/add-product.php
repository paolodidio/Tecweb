
  <?php add_product(); ?>

  <div class="add-product">

    <h1 class="admin-title">Aggiungi pianta</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <legend>Aggiungi pianta</legend>
      <div class="first-col">

        <div class="edit-input">
          <label for="nome">Nome pianta</label>
          <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="edit-input">
          <label for="genere">Genere</label>
          <input type="text" name="genere" class="form-control" required>
        </div>

        <div class="edit-input">
          <label for="specie">Specie</label>
          <input type="text" name="specie" class="form-control" required>
        </div>

        <div class="edit-input">
          <label for="famiglia">Famiglia</label>
          <input type="text" name="famiglia" class="form-control" required>
        </div>

        <div class="edit-input">
          <label for="colore">Colore fiori</label>
          <input type="text" name="colore" class="form-control" required>
        </div>

      </div>

      <div class="second-col">

        <div class="edit-input">
          <label for="descrizione">Descrizione pianta</label>
          <textarea name="descrizione" id="" cols="30" rows="10" class="form-control" required></textarea>
        </div>

        <div class="select-input">
          <label for="interno">Da interno</label>
          <select name="interno" id="" class="form-control" required>
            <option value="0">Si</option>
            <option value="1">No</option>
          </select>
        </div>

        <div class="select-input">
          <label for="hardiness" xml:lang="en">Hardiness</label>
          <select name="hardiness" id="" class="form-control"required>
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
          <select name="fioritura" id="" class="form-control" required>
            <option value="Primavera">Primavera</option>
            <option value="Estate">Estate</option>
            <option value="Autunno">Autunno</option>
            <option value="Inverno">Inverno</option>
          </select>
        </div>

        <div class="select-input">
          <label for="cat_id">Categoria</label>
          <select name="cat_id" id="" class="form-control" required>
            <option value="">Seleziona categoria</option>
            <?php show_categories_admin(); ?>
          </select>
        </div>

      </div>

      <div class="first-col">

        <div class="check-input">
          <label id="check-title" for="illuminazione">Illuminazione</label>
          <input type="checkbox" id="" name="illuminazione" value="Pieno sole"required>
          <label for="sole">Pieno sole</label><br>
          <input type="checkbox" id="" name="illuminazione" value="Ombra" required>
          <label for="ombra">Ombra</label><br>
          <input type="checkbox" id="" name="illuminazione" value="Mezz'ombra" required>
          <label for="mezza">Mezz'ombra</label>
        </div>

        <div class="edit-input2">
          <label for="prezzo">Prezzo</label>
          <input type="number" name="prezzo" class="form-control" size="60" required>
        </div>

        <div class="edit-input2">
          <label for="pianta_qt">Quantità</label>
          <input type="number" name="pianta_qt" class="form-control" size="60" required>
        </div>

      </div>

      <div class="second-col">

        <div class="edit-input2">
          <label for="pianta_img">Immagine pianta</label>
          <input type="file" name="file"required>
        </div>

        <div class="update-button">
          <input type="submit" name="publish" value="Aggiungi">
        </div>

          <input type="button" value="Reset" onClick="this.form.reset()" />

      </div>

    </form>

  </div>