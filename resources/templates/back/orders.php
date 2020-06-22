<div class="orders">

  <h1 class="admin-title">Ordini</h1>
  <p><?php display_message(); ?></p>

  <table summary="Ordini">
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
