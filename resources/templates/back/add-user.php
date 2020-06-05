<?php add_user(); ?>
<h1 class="page-header">Aggiungi utente</h1>

<form action="" method="post" enctype="multipart/form-data">

  <div class="col-md-6">

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" class="form-control"   >
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control"  >
    </div>

    <div class="form-group">
      <input type="submit" name="add_user" class="btn btn-primary pull-right" value="Aggiungi utente" >
    </div>

  </div>

</form>
