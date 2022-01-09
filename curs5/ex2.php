<?php

/*
Exercitiul 2 
Ce afiseaza urmatorul script?
*/

$tabloul=array(
    "oras"=>"Bucuresti",  // are cheia definita
    10, // 0 - valoare cheie
    89  // 1 - valoare cheie
);
echo "<pre>";
var_export($tabloul);

$tabloul2=array(
    "abac", // 0 - valoare cheie
    "computer", //  1 - valoare cheie
    "oras"=>"Braila",
    4 //  2 - valoare cheie
);
var_export($tabloul2);

$rezultat = array_merge($tabloul, $tabloul2);

print_r($rezultat);       









?>