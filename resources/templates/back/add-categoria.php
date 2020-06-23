
  <?php add_category(); ?>
  
  <div class="add-cat">

    <h1 class="admin-title">Categorie</h1>
    <p><?php display_message(); ?></p>

    <div class="add-cat-form">

      <form action="" method="post">
        <legend>Aggiungi una categoria</legend>
        <div class="edit-cat-input">
          <label for="cat_title">Nome categoria</label>
          <input type="text" name="cat_title" class="form-control" required/>
        </div>

        <div class="update-button">
          <input type="submit" name="add-categoria" class="btn btn-primary" value="Aggiungi categoria"/>
        </div>
          <input type="button" value="Reset" onClick="this.form.reset()" />

      </form>

    </div>

    <div class="add-cat-table">
      <table summary="Add category table">
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

  </div>