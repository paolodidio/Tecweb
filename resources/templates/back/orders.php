<div id="Orders">

  <h1 class="admin-title">Ordini</h1>
  <p class="warning-msg"><?php display_message(); ?></p>

  <table class="table" summary="Ordini">
    <thead>
      <tr>
        <th>Id</th>
        <th>Totale</th>
        <th>Azioni</th>
      </tr>
    </thead>
    <tbody>
      <?php display_orders(); ?>
    </tbody>
  </table>

</div>
