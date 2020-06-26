
  <?php add_category(); ?>
  
  <div id="AddCat">

    <h1 class="admin-title">Categorie</h1>
    <p class="warning-msg"><?php display_message(); ?></p>

    <form action="" method="post">
      <fieldset>
        <legend>Aggiungi una categoria</legend>
        <div class="edit-input-group">
          <label for="cat_title">Nome categoria</label>
          <input type="text" name="cat_title" class="form-control" required/>
        </div>

        <input class="submit-button" type="submit" name="add-categoria" value="Aggiungi categoria"/>
        <input class="reset-button" type="button" value="Reset" onclick="this.form.reset()" />
      </fieldset>
    </form>

    <table class="table" summary="Categorie di piante">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Azioni</th>
        </tr>
      </thead>
      <tbody>
        <?php get_cat_admin(); ?>
      </tbody>
    </table>

  </div>