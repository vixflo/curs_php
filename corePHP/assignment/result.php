<!DOCTYPE html>
<html lang="en">
<?php include_once('inc/head.html'); ?>
  <body>
    <div class="container">
      <?php include_once 'inc/navbar.html'; ?>
    <div class="card" style="width: 100%;">
      <img src="img/bicycle-result.jpg" class="card-img-top" alt="img_bic">
        <div class="card-body">
          <h2 class="card-title text-center">Lista cu Biciclete</h2>
          <?php include_once('inc/connect.php'); ?>
        <?php
          $sql = "SELECT * FROM biciclete";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) : ?>
            <table class="table table-striped">
              <thead class="table-primary">
                <tr class="table-primary">
                  <th scope="col">Imagine</th>
                  <th scope="col">Nume</th>
                  <th scope="col">Model</th>
                  <th scope="col">Culoare</th>
                  <th scope="col">Material</th>
                  <th scope="col">Pret</th>
                  <th scope="col">Data adaugare</th>
                  <th scope="col"><a class="btn btn-success btn-sm" href="formular.php" role="button"><i class="bi bi-arrow-up-circle"></i> Insert</a></th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <?php if ($row['id']  > 0) : ?>
                    <tr class="table-light">
                      <td><img style="max-width:60px;" src="img/<?php echo $row['poza']; ?>" alt="poza"></td>
                      <td scope="row"><b><?php echo ucfirst($row['nume']); ?></b></td>
                      <td><?php echo ucfirst($row['model']); ?></td>
                      <td><?php echo $row['culoare']; ?></td>
                      <td><?php echo $row['material']; ?></td>
                      <td><?php echo $row['pret']; ?></td>
                      <td><?php echo $row['dataadaugare']; ?></td>
                      <td><a class="btn btn-danger btn-sm" href="inc/remove.php?id=<?php echo $row['id'] ?>" role="button"><i class="bi bi-x-circle"></i> Delete</a></td>
                    </tr>
                  <?php endif; ?>
                <?php endwhile; ?>
              </tbody>
            </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </body>
</html>