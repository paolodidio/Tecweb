<?php

edit_user();

if(isset($_GET['id'])) {

  $query = query("SELECT * FROM utenti WHERE utente_id=" . escape_string($_GET['id']) . " ");
  confirm($query);

  while ($row = fetch_array($query)) {

    $email = escape_string($row['email']);
    $password = escape_string($row['password']);
    $admin = escape_string($row['admin']);

  }

}

?>

<div id="EditUser">
  <h1 class="admin-title">Modifica utente</h1>

  <form action="" method="post" enctype="multipart/form-data">
  <legend>Modifica utente</legend>

    <div class="edit-input-group">
      <label for="email" xml:lang="en">Email</label>
      <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" required>

      <label for="password" xml:lang="en">Password</label>
      <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" required>
    </div>

    <div class="select-input-group">
      <label for="admin" xml:lang="en">Admin</label>
      <select name="admin" id="" class="form-control" required>
        <option value="0">Si</option>
        <option value="1">No</option>
      </select>
    </div>

    <input class="submit-button" type="submit" name="update_user" value="Modifica" >
    <input class="reset-button" type="button" value="Reset" onClick="this.form.reset()" />

  </form>
</div>
