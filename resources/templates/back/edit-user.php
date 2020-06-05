<?php

edit_user();

if(isset($_GET['id'])) {

  $query = query("SELECT * FROM utenti WHERE utente_id=" . escape_string($_GET['id']) . " ");
  confirm($query);

  while ($row = fetch_array($query)) {

    $email = escape_string($row['email']);
    $password = escape_string($row['password']);

  }

}

?>

<h1 class="page-header">Modifica utente</h1>

<form action="" method="post" enctype="multipart/form-data">

  <div class="col-md-6">

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
    </div>

    <div class="form-group">
      <input type="submit" name="update_user" class="btn btn-primary pull-right" value="Modifica" >
    </div>

  </div>

</form>
