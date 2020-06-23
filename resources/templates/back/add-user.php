<?php add_user(); ?>

<div class="add-user">

  <h1 class="admin-title">Aggiungi utente</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <legend>Aggiungi un utente</legend>
    <div class="edit-input">
      <label for="email" xml:lang="en">Email</label>
      <input type="text" name="email" class="form-control"  required>
    </div>

    <div class="edit-input">
      <label for="password" xml:lang="en">Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>

    <div class="update-button">
      <input type="submit" name="add_user" value="Aggiungi utente"required>
    </div>
      <input type="button" value="Reset" onClick="this.form.reset()" />

  </form>

</div>
