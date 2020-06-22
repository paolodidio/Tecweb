<?php add_user(); ?>

<div class="add-user">

  <h1 class="admin-title">Aggiungi utente</h1>

  <form action="" method="post" enctype="multipart/form-data">

    <div class="edit-input">
      <label for="email" xml:lang="en">Email</label>
      <input type="text" name="email" class="form-control"   >
    </div>

    <div class="edit-input">
      <label for="password" xml:lang="en">Password</label>
      <input type="password" name="password" class="form-control"  >
    </div>

    <div class="update-button">
      <input type="submit" name="add_user" value="Aggiungi utente" >
    </div>

  </form>

</div>
