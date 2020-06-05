<h1 class="page-header">Reports</h1>

<h2><?php display_message(); ?></h2>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Id pianta</th>
      <th>Nome pianta</th>
      <th>Prezzo</th>
      <th>Quantità</th>
      <th>Id ordine</th>
    </tr>
  </thead>
  <tbody>
    <?php get_reports(); ?>
  </tbody>
</table>
