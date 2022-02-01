<?php
error_reporting(-1);
// echo "Sunt in fisierul post.php";
//  echo "<pre>";
//  print_r ($_POST); die;
// print_r($_FILES);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//https://www.w3schools.com/php/php_form_url_email.asp
//https://www.w3schools.com/php/php_file_upload.asp
//https://code-boxx.com/simple-csrf-token-php/

// Validare CSR pe sesiune prin comarare cheie token
$cheie= $_SESSION['token'];
if( !isset ($_POST['hash'] )  || $cheie !== $_POST['hash']  ){
    echo 'Eroare CSRF';die;
}
include_once("connect.php");


$nume = '';
$model = '';
$pret = '';
$an = '';
$culoare = '';
$poza = '';
$mess_error = '';

//validare
if (isset($_POST['nume']) && !empty($_POST['nume']) && strlen($_POST['nume']) >= 2) {
    $nume = trim($_POST['nume']);
} else {
    $error = true;
    $mess_error .= 'Numele masinii nu a fost introdus!' . "<br />";
}
if (isset($_POST['model']) && !empty($_POST['model'])) {
    $model = trim($_POST['model']);
} else {
    $error = true;
    $mess_error .= 'Modelul nu a fost introdus!' . "<br />";
}
if (isset($_POST['pret']) && !empty($_POST['pret'])) {
    $pret = trim($_POST['pret']);
} else {
    $error = true;
    $mess_error .= 'Pretul nu a fost introdus!' . "<br />";
}
if (isset($_POST['an']) && !empty($_POST['an'])) {
    $an = trim($_POST['an']);
} else {
    $error = true;
    $mess_error .= 'Anul nu a fost introdus corect!' . "<br />";
}
if (isset($_POST['culoare']) && !empty($_POST['culoare'])) {
    $culoare = trim($_POST['culoare']);
} else {
    $error = true;
    $mess_error .= 'Culoarea nu a fost introdusa!' . "<br />";
}

// cod PHP pentru adaugarea imaginilor
if (isset($_FILES['poza']) && $_FILES['poza']['size'] > 0) {
    $path = "img/"; // afisam calea 
    $poza = basename($_FILES['poza']['name']);
    $path = $path . $poza;
    $check = getimagesize($_FILES["poza"]["tmp_name"]);
    if ($check !== false) {
        //echo "Imoginea este de tip- " . $check["mime"] . ".";
        if (move_uploaded_file($_FILES['poza']['tmp_name'], $path)) {
            //ok
        } else {
            $mess_error .= "Poza nu o putut fi salvata! <br>";
        }
    } else {
        $mess_error .= "Fisierul incarcat nu este acceptat!";
    }
}
?>
<?php
if (isset($error) && $error === true) {
    echo '<div class="alert alert-danger" role="alert">' .
        $mess_error . '<br><br><a class="alert-link" href="formular.php"> << Introduceti datele corect!</a>
        </div>';
    //include("formular.php");
} else {
    //salvare date
    $sql = "INSERT INTO masini (nume, model, pret, an, culoare, poza)
        VALUES ('" . $nume . "', '" . $model . "', '" . $pret . "', '" . $an . "', '" . $culoare . "', '" . $poza . "')";
    if (mysqli_query($con, $sql)) {
        $mesaj_success = "Datele au fost introduse cu succes!";
        $db_eroare = false;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<?php include_once 'head.html'; ?>

<body>

    <?php if (isset($db_eroare) && $db_eroare === false) : ?>
        <div class="alert alert-success" role="alert">
            <p><?php echo $mesaj_success; ?></p>
            <a class="alert-link" href="formular.php">
                << Reveniti la formular</a>
        </div>
        <br />
    <?php endif; ?>
</body>

</html>