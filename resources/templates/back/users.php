
  <div id="Users">

    <h1 class="admin-title">Utenti</h1>
    <p class="warning-msg"><?php display_message(); ?></p>

    <a class="colored-button" id="add-user" href="../../public/admin/index.php?add-user">Aggiungi utente</a>

    <table class="table" summary="Utenti">
      <thead>
        <tr>
          <th>Id</th>
          <th>Email</th>
          <th>Admin</th>
          <th>Azioni</th>
        </tr>
      </thead>
      <tbody>
        <?php get_users(); ?>
      </tbody>
    </table>

  </div>
