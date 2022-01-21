<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
// Validarea sesiunii CSRF prin compararea cheilor token
$cheie = $_SESSION['token'];
if (!isset($_POST['hash'])  || $cheie !== $_POST['hash']) {
  echo 'Eroare CSRF';
  die;
}
// Stabilim conexiunea cu baza de date
include_once("inc/connect.php");
$nume = '';
$model = '';
$culoare = '';
$material = '';
$pret = '';
$poza = '';
$mess_error = '';
// Obtinem validarea datelor din formular
if (isset($_POST['nume']) && !empty($_POST['nume']) && strlen($_POST['nume']) >= 2) {
  $nume = trim($_POST['nume']);
} else {
  $error = true;
  $mess_error .= 'Campul pentru nume nu a fost completat!' . "<br />";
}
if (isset($_POST['model']) && !empty($_POST['model'])) {
  $model = trim($_POST['model']);
} else {
  $error = true;
  $mess_error .= 'Campul pentru model nu a fost completat!' . "<br />";
}
if (isset($_POST['culoare']) && !empty($_POST['culoare'])) {
  $culoare = trim($_POST['culoare']);
} else {
  $error = true;
  $mess_error .= 'Campul pentru culoare nu a fost completat!' . "<br />";
}
if (isset($_POST['material']) && !empty($_POST['material'])) {
  $material = trim($_POST['material']);
} else {
  $error = true;
  $mess_error .= 'Campul pentru material nu a fost completat!' . "<br />";
}
if (isset($_POST['pret']) && !empty($_POST['pret'])) {
  $pret = trim($_POST['pret']);
} else {
  $error = true;
  $mess_error .= 'Campul pentru pret nu a fost completat!' . "<br />";
}
// cod PHP pentru adaugarea imaginilor
if (isset($_FILES['poza']) && $_FILES['poza']['size'] > 0) {
  $path = "img/"; // afisam calea 
  $poza = basename($_FILES['poza']['name']);
  $path = $path . $poza;
  $check = getimagesize($_FILES["poza"]["tmp_name"]);
  if ($check !== false) {
    if (move_uploaded_file($_FILES['poza']['tmp_name'], $path)) {
      // daca totul este ok
    } else {
      // daca nu se afiseaza eroarea
      $mess_error .= "Imaginea nu a putut fi salvata! <br>";
    }
  } else {
    // daca nu este o imagine se afiseaza eroarea
    $mess_error .= "Fisierul incarcat nu este in formatul acceptat!";
  }
}
?>
<?php
if (isset($error) && $error === true) {
  echo '<div class="alert alert-danger" role="alert">' .
    $mess_error . '<br><br><a class="alert-link" href="formular.php"> Introduceti din nou datele corect!</a></div>';
} else {
  //salvare date
  $sql = "INSERT INTO biciclete (nume, model, culoare, material, pret, poza)
    VALUES ('" . $nume . "', '" . $model . "', '" . $culoare . "', '" . $material . "', '" . $pret . "', '" . $poza . "')";
  if (mysqli_query($conn, $sql)) {
    $mesaj_success = "Toate datele au fost introduse cu succes!";
    $db_eroare = false;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'inc/head.html'; ?>

<body>
  <div class="container">
    <?php include_once 'inc/navbar.html'; ?>
    <div class="card" style="width: 100%;">
      <img src="img/succes.jpg" class="card-img-top" alt="img_biciclete">
      <div class="card-body">
        <h2 class="card-title text-center">Felicitari!</h2>
        <?php if (isset($db_eroare) && $db_eroare === false) : ?>
          <div class="alert alert-success" role="alert">
            <p class="card-text"><?php echo $mesaj_success; ?></p>
            <p class="card-text"> Ati adaugat un produs nou in baza de date</p>
          </div>
          <a href="formular.php" class="btn btn-primary">Inserati inca un produs</a>
          <a href="result.php" class="btn btn-primary">Listati produsele</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>

</html>