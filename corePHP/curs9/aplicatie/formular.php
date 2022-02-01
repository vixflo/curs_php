<?php
error_reporting(-1); // -1 pentru a afisa toate erorile
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  $length = 32;
  $_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
  $hash = $_SESSION['token'];
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'head.html'; ?>

<body>
  <div class="container">
    <h1 class="h1"> Formular adaugare masini</h1>

    <form action="http://localhost/curs_php/curs9/aplicatie/post.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nume">Nume</label>
        <input type="text" name="nume" class="form-control" placeholder="Nume" required>
      </div>
      <div class="form-group">
        <label for="model">Model</label>
        <input type="text" name="model" class="form-control" placeholder="Model" id="model">
      </div>
      <div class="form-group">
        <label for="pret">Pret</label>
        <input type="text" name="pret" class="form-control" placeholder="Pret" id="pret">
      </div>
      <div class="form-group">
        <label for="an">An</label>
        <input type="text" name="an" class="form-control" placeholder="Anul" id="an">
      </div>
      <div class="form-group">
        <label for="culoare">Culoare</label>
        <input type="text" name="culoare" class="form-control" placeholder="Culoare" id="culoare">
      </div>
      <div class="form-group">
        <label for="poza">Poza</label>
        <input type="file" name="poza" class="form-control" id="poza">
      </div>
      <input type="hidden" name="hash" value="<?php echo $hash; ?>">
      <button type="submit" class="btn btn-primary">Salveaza masina</button>
    </form>
  </div>
</body>

</html>