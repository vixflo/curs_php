<?php
// adaugam fisierul pentru conexiunea cu baza noastra de date
require("connect.php");
// cu aceata ramificatie if verificam daca a fost setata valoarea pentru $_GET si criteriul cheie
if (isset($_GET['criteria'])) {
    // cu aceasta ramificatie if verificam 	daca campurile au fost completate de utilizator.
    if (!empty($_GET['criteria'])) {
        // definim variabila $criteria si cautam valorile in baza de date pe baza acestei intrari
        $criteria = trim($_GET['criteria']); //Cu trim, taiem spatiile de la inceput si de la sfarsitul acestui string
        // asiguram securitatea
        $criteria = mysqli_real_escape_string($conn, $criteria);
        // cu aceasta formula interogam tabelul contacts din baza noastra de date
        $query = "SELECT * FROM contacts WHERE fname LIKE '%{$criteria}%' OR lname LIKE '%{$criteria}%'"; // am selectat criteriul de cautare pe nume (fname) sau prenume (lname)

        /* Urmatorul cod afiseaza rezultatul interogarii bazei de date pe pagina */
        $result  = mysqli_query($conn, $query); // definim conexiunea 
        // verificam rezultatele pe pagina
        if (mysqli_num_rows($result) > 0) {
            // Afisam rezultatele pe pagina folosind bucla while
            while ($row = mysqli_fetch_assoc($result)) {
                // returnam rezultatele true
?>
    <!-- Afisam continut HTML in afara codului PHP -->
    <div id="result">
        <!-- Afisam imaginea utilizatorului -->
        <img src="img/user.png">
        <!-- Afisam numele si prenumele utilizatorului -->
        <p><b>Name: </b> <?php echo $row['fname'] . " " . $row['lname']; ?> </p>
        <!-- Afisam nr. de telefon a utilizatorului -->
        <p><b>Tel: </b> <?php echo $row['tel']; ?> </p>
    </div>
    <!-- Revenim la codul PHP -->
<?php
        }
            // afisam contorul pentru rezultatele optinute
            echo "Number of results: " . mysqli_num_rows($result);
        } else {
            // daca valoarea nu exista in baza de date se va afisa fara rezultate
            echo "No results";
        }
        // aici adaugam valoarea default pentru cautarea unui camp gol	
    } else {
        echo "Criteria is empty";
    }
}

?>