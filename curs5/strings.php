<?php

/*
    trim( ) – elimină spaţiile goale de la începutul şi de la sfârşitul stringului;
    ltrim( ) – elimină spaţiile goale de la începutul stringului;
    rtrim( ) – elimină spaţiile goale de la sfârşitul stringului;
    str_word_count( ) – numără cuvintele căutate în string, însă dacă se setează suplimentar parametrii opţionali, atunci se pot crea şi unele şiruri noi din rezultatele căutării;
    strpbrk(string, char) – caută caracterul char în textul string şi returnează restul stringului după repetarea caracterelor;
    strtoupper(string) – transformă toate literele în majuscule;
    strtolower(string) – transformă toate literele în minuscule.

*/

// Trebuie verificată validitatea acestor variabile şi să vă asiguraţi că nu sunt goale şi că nu conţin următoarele caractere: < > i ‘

// function clean_string($string)
// {
//     $string = str_replace("<", "", $string);
//     $string = str_replace(">", "", $string);
//     $string = str_replace("'", "", $string);
//     return $string;
// }
// $userName = "myName<";
// $password = "myPa>sswo'rd";
// $userName = clean_string(trim($userName));
// $password = clean_string(trim($password));
// if(trim($userName) == "" || trim($password) == "")
//     die("invalid credentials");
// echo "valid credentials";

// Ex 2

// $lipsum = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";

// Trebuie formatat stringul în aşa fel încât, dacă are mai mult de 15 caractere, acesta să fie tăiat, astfel încât ultimele trei caractere, până la al 15-lea, să fie puncte.

// $lipsum = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
// $iesire = (strlen( $lipsum ) > 15) ?substr( $lipsum, 0, 12 )."...": $lipsum;
// echo $iesire;

// se afiseaza: Lorem Ipsum ...

// Ex 3

// $status = "admin";
 $status = "test";

$numbers = array(
    "021 256 365",
    "021 256 365",
    "021 256 672",
    "021 256 843",
    "021 256 623",
 );

if($status === "admin") {
    foreach ($numbers as $index => $value) {
        echo "Number " . $index . ": " . $value . "<br>";
    }

} else {
    foreach ($numbers as $index => $value) {
        $value=substr_replace($value,"*** *",4,5);
        echo "Number " . $index . ": " . $value . "<br>"; 
    }
}

// Daca valoarea variabilei $status este "admin" atunci va afisa:  Number 0: 021 256 365 ....

// Daca valoarea variabilei $status nu va mai fi "admin" atunci va afisa:  Number 0: 021 *** *65 ...
?>