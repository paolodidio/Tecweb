
  <h1 class="page-header">Utenti</h1>
  <h2><?php display_message(); ?></h2>

  <a href="index.php?add-user" class="btn btn-primary">Aggiungi utente</a>

  <div class="col-md-12">

    <table class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php get_users(); ?>
      </tbody>
    </table>

  </div>
