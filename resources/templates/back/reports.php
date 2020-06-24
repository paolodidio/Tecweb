<div id="Reports">
  <h1 class="admin-title" xml:lang="en">Reports</h1>
  <p class="warning-msg"><?php display_message(); ?></p>

  <table class="table" summary="Reports">
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
