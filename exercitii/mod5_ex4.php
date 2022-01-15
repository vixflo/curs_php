<?php

// Exerciţiul 4

/* În aceasta aplicaţie, trebuie creată o funcţie care va accepta un string şi va returna caracterele în ordine inversă (de exemplu, stringul „stringul meu” devine „uem lugnirts”).  */

// Rezolvarea aplicatiei va arata astfel:

// function str_reverse($str){
//     $rez = "";
//     for($i=strlen($str)-1; $i>=0; $i--){
//         $rez.=$str[$i];
// }
// return $rez;
// }
// $text = "stringul meu";
// echo str_reverse($text);

/*  Funcţia care îndeplineşte sarcina cerută în textul exerciţiului se va numi: str_reverse. Deoarece funcţia trebuie să proceseze stringul care îi este transmis, vom pune un singur argument: $str. Când s-a terminat, funcţia va returna rezultatul în formă de string. Am putea presupune că variabila care va reprezenta rezultatul funcţiei noastre va fi, iniţial, un string gol, iar mai târziu, probabil, va fi un şir de caractere mai complex.   */

// Pe baza celor menţionate mai sus, scriem următorul cod:

// function str_reverse($str){
//     $rez = "";
//     return $rez;
// }

/*
Stringurile PHP se pot prelucra ca şirurile. Aceasta înseamnă că PHP este capabil să numere caracterele din string şi să obţină, pe baza poziţiei, caracterul corespunzător din string. Astfel de etichete se numesc indexuri şi indexarea în PHP începe implicit de la zero.
*/

// Acum creăm variabila $text şi apelăm funcţia:

// function str_reverse($str){
//     $rez = "";
//     return $rez;
// }
// $text = "stringul meu"; 
// echo str_reverse($text);

/*
Stringul pe care îl prelucrează funcţia, în cazul nostru, este: „my string”. Aceasta înseamnă că dacă dorim să parcurgem acest string folosind o buclă for, trebuie să determinăm numărul de caractere din string, pentru a efectua o iteraţie pentru fiecare string. Putem face acest lucru cu funcţia strlen(). Totuşi, indexarea începe de la zero, ceea ce înseamnă că cel mai mare index al stringului nostru este cu unu mai mic decât numărul de caractere, deoarece numărăm de la 1, iar indexarea este de la 0.

Prin urmare, setăm următoarea buclă, care va scrie caracterul corespunzător iteraţiei:
*/

// for($i=strlen($str)-1; $i>=0; $i--){
//         $rez.=$str[$i];
//     }

/*
În cele din urmă, exerciţiul nostru este finalizat şi funcţia este gata de utilizare.

Astfel browserul va afisa:   
*/
// uem lugnirts ("stringul meu" scris invers "uem lugnirts")

$x=10; echo "x=$x";

?>