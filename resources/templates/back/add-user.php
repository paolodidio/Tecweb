<?php add_user(); ?>

<div id="AddUser">

  <h1 class="admin-title">Aggiungi utente</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <legend>Aggiungi un utente</legend>
    <div class="edit-input-group">
      <label for="email" xml:lang="en">Email</label>
      <input type="text" name="email" class="form-control"  required>

      <label for="password" xml:lang="en">Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>

      <input class="submit-button" type="submit" name="add_user" value="Aggiungi utente"required>
      <input class="reset-button" type="button" value="Reset" onClick="this.form.reset()" />

  </form>

</div>
