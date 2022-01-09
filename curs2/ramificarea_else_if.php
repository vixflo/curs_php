<?php

// if (conditie 1) {
//     bloc de cod care va fi executat daca conditia 1 este indeplinita
// }
// elseif (conditie 2) {
//     bloc de cod care va fi executat daca conditia 1 nu este indeplinita
// }
// elseif (conditie 3) {
//     bloc de cod care va fi executat daca conditia 1 si 2 nu este indeplinita
// } else {
//     blocul de cod alternativ care se va executa atunci cand celelalte conditii nu sunt ideplinite
// }

// Ex: 1

// $munber = 5; // daca $mumber este 10 va afisa valoarea blocului de cod elseif (equal to 10). 

//  if ($munber > 10) {

//     echo "greater than 10";

//  }

//  elseif ($munber==10) {

//      echo "equal to 10";

//  }

//  else {

//     echo "less than 10"; // acest bloc de cod nu testeaza nici o conditie si se va executa atunci cand nu este indeplinita nici o conditie.

//  }

// Ex: 2

$password = "test123";   // Valoare actuala din baza de date
$old_password = "test";  // Valoare veche din baza de date
$user_imput = "12345";   // Valoarea introdusa in formular de utilizator

/*
 Daca schimbam valoarile $user_imput, vom optine executii diferite ale conditiilor 
Ex: 
    $user_imput = "test123" se va executa conditia 1 cu pagina de bun venit deoarece conditia este adevarata
    $user_imput = "test" se va afisa conditia 2 cu pagina de avertisment ("This is your old password, u have a new one) deoarece conditia va trimite un avertisment
    $user_imput = "12345" se va afisa blocul de cod din else deoarece parola este scrisa gresit si nu indeplineste niciuna dintre conditii
*/

if($user_imput == $password) {

     echo "Welcome";
    
  }
  elseif ($user_imput == $old_password) {
      
    echo "This is your old password, u have a new one";

  }
  else {
      echo "Wrong password";
  }

?>