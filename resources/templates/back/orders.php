<div class="content">

  <h1>Tutti gli ordini</h1>
  <h2><?php display_message(); ?></h2>

  <div class="row">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Totale</th>
          <th>Transazione</th>
          <th>Stato</th>
        </tr>
      </thead>
      <tbody>
        <?php display_orders(); ?>
      </tbody>
    </table>
  </div>

</div>
