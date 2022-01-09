<?php

/*
Siruri de caractere
Exercitiul 2 
Ce afiseaza urmatorul script?
*/

$cumparaturi =[
    '1' => "paine",
    '2' => "oua",
    '3' => "lapte",
    '4' => "masline",
    '5' => "cadouri",
];

// nesortate
echo "<pre>";
print_r($cumparaturi);

function dupa_lungime($e1, $e2){

    return strlen($e1) - strlen($e2);
}
// sortate cu uasort
uasort($cumparaturi, "dupa_lungime");
echo "<pre>";
print_r($cumparaturi);






?>