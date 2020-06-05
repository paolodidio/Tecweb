<h1 class="page-header">Prodotti</h1>

<h2><?php display_message(); ?></h2>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Categoria</th>
      <th>Prezzo</th>
      <th>Quantità</th>
    </tr>
  </thead>
  <tbody>
    <?php admin_products(); ?>
  </tbody>
</table>
