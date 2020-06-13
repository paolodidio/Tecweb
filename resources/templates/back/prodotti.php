<div class="admin-products">
  <h1 class="admin-title">Prodotti</h1>

  <p><?php display_message(); ?></p>

  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Prezzo</th>
        <th>Quantità</th>
        <th>Azioni</th>
      </tr>
    </thead>
    <tbody>
      <?php admin_products(); ?>
    </tbody>
  </table>
</div>
