<div class="dashboard">
  <h1 class="admin-title" xml:lang="en">Dashboard</h1>

  <table>
    <thead>
      <tr>
        <th>Ordini</th>
        <th>Piante</th>
        <th>Categorie</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php tot_orders(); ?><a href="index.php?orders">Vedi dettagli</a></td>
        <td><?php tot_piante(); ?><a href="index.php?prodotti">Vedi dettagli</a></td>
        <td><?php tot_cat(); ?><a href="index.php?add-categoria">Vedi dettagli</a></td>
      </tr>
    </tbody>
  </table>
</div>

