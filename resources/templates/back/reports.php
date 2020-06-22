<div class="reports">
  <h1 class="admin-title" xml:lang="en">Reports</h1>
  <p><?php display_message(); ?></p>

  <table summary="Reports">
    <thead>
      <tr>
        <th>Id</th>
        <th>Id pianta</th>
        <th>Nome pianta</th>
        <th>Prezzo</th>
        <th>Quantità</th>
        <th>Id ordine</th>
        <th>Azioni</th>
      </tr>
    </thead>
    <tbody>
      <?php get_reports(); ?>
    </tbody>
  </table>
</div>
