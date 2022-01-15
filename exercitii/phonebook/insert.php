<html>
  <head>
    <meta charset="UTF-8">
      <title> Phonebook </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="wrap">
      <div id="search">
        <img src="img/addcontact.png">		
          <a href="index.php"> <img src="img/phonebookimage.png" height="50px" title="Search"></a>
          <a href="remove.php"> <img src="img/removecontact.png" height="50px" title="Remove contact"> </a>
         <!-- Deschidem un formular pentru adaugarea datelor si folosim metoda POST -->
          <form action="#" method="POST">
           <!-- Adaugam campurile de intrroducere a datelor  -->
              <label> First name: <br>
                <input type="text" name="fname"> </label><br>
              <label> Last name: <br>
                <input type="text" name="lname"> </label><br>
              <label> Tel: <br>
                <input type="text" name="tel"> </label><br>
             <!-- Afisam butonul de trimitere a datelor  -->
            <input type="submit" name="insert" value="insert"> <br>
           <!-- Inchidem formularul -->
          </form>		
      </div>		
      <div id="message">
       <!-- Deschidem codul PHP -->
        <?php
         # Verificam daca parametrii sunt trimisi
          if(isset($_POST['insert'])) {
           # Verificam daca parametrii trimisi sunt corecti
            if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['tel'])) {
             # Verificam daca toate campurile sunt completate
              if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['tel'])) {
               # definim variabilele formularului	
                $fname = trim($_POST['fname']); // nume
                $lname = trim($_POST['lname']); // prenume
                $tel = trim($_POST['tel']);	// numar de telefon
                 /* Asiguram conexiunea cu baza de date */
                   # includem un fisier cu date de conectare la baza de date
                  require('inc/connect.php');
                   # asiguram securitatea culegerii datelor
                  $fname = mysqli_real_escape_string($conn,$fname);
                  $lname = mysqli_real_escape_string($conn,$lname);
                  $tel = mysqli_real_escape_string($conn,$tel);
                   # executam interogarea tabelului contacte din baza de date
                  $query = "INSERT INTO contacts(fname, lname, tel ) VALUES ('{$fname}','{$lname}','{$tel}')";
                   # Realizam cautarea parametrilor si folosim aceasta conditie: mysqli_query($conn,$query) === TRUE
                if (mysqli_query($conn,$query) === TRUE){
                 # Acest mesaj indica ca operatiunea a avut succes
                  echo "New record succesfully created";
                } else {
                 # Acest mesaj indica ca operatiunea a avut o eroare
                  echo "Error!";           
                }				
              } else {
               # afisam un mesaj de avertizare pentru completarea tuturor campurilor	
                echo "All fields must be filled in.";			
              }           
            } else {
             # afisam un mesaj de avertizare pentru a informa utilizatorul ca nu a completat toate campurile care sunt obligatorii si trebuie sa fie completate inainte de a fi trimise
            echo "All parameters must be sent.";           
            }           
          }
        ?>
      </div>		
    </div>
  </body>
</html>