
  <?php add_category(); ?>
  <h1 class="page-header">Categorie di piante</h1>
  <h2><?php display_message(); ?></h2>

  <div class="col-md-4">
    <form action="" method="post">

      <div class="form-group">
        <label for="cat_title">Nome categoria</label>
        <input type="text" name="cat_title" class="form-control">
      </div>

      <div class="form-group">
        <input type="submit" name="add-categoria" class="btn btn-primary" value="Aggiungi categoria">
      </div>

    </form>
  </div>

  <div class="col-md-8">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
        </tr>
      </thead>
      <tbody>
        <?php get_cat_admin(); ?>
      </tbody>
    </table>
  </div>
