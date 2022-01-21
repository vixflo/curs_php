<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  $length = 32;
  $_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
  $hash = $_SESSION['token'];
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'inc/head.html'; ?>

<body>
  <div class="container">
    <?php include_once 'inc/navbar.html'; ?>
    <div class="card" style="width: 100%;">
      <img src="img/bike-series.jpg" class="card-img-top" alt="imagini_biciclete">
      <div class="card-body">
        <h3 class="card-title text-center">Adaugati elemente noi in baza de date</h3>
        <form class="bg-light p-3" action="post.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="hash" value="<?php echo $hash; ?>">
          <div class="form-group">
            <label for="nume" class="form-label">Nume</label>
            <input type="text" name="nume" class="form-control" placeholder="Nume" required>
          </div>
          <div class="form-group">
            <label for="model" class="form-label">Model</label>
            <input type="text" name="model" class="form-control" placeholder="Model" id="model">
          </div>
          <div class="form-group">
            <label for="culoare" class="form-label">Culoare</label>
            <input type="text" name="culoare" class="form-control" placeholder="Culoare" id="culoare">
          </div>
          <div class="form-group">
            <label for="material" class="form-label">Material</label>
            <input type="text" name="material" class="form-control" placeholder="Material" id="material">
          </div>
          <div class="form-group">
            <label for="pret" class="form-label">Pret</label>
            <input type="text" name="pret" class="form-control" placeholder="Pret" id="pret">
          </div>
          <div class="form-group">
            <div class="custom-file">
              <label for="poza" class="custom-file-label">Imagine</label>
              <input type="file" name="poza" class="custom-file-input" id="poza">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Inserati produsul</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>