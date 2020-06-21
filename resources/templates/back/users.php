
  <div class="users">

    <h1 class="admin-title">Utenti</h1>
    <p><?php display_message(); ?></p>

    <a id="add-user" href="../public/admin/index.php?add-user">Aggiungi utente</a>

    <table>
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
