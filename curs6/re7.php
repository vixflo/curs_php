<?php

$cumparaturi = [
    '1'=>"paine",
    '2'=>"oua",
    '3'=>"lapte",
    '4'=>'masline',
    '5'=>'cadouri'
];

function dupa_lungime($e1, $e2){
  return strlen($e1)-strlen($e2);
}
echo "<pre>";
print_r($cumparaturi);
uasort($cumparaturi, "dupa_lungime");
echo "<pre>";
print_r($cumparaturi);
// Se afiseaza: Array ( [2] => oua [1] => paine [3] => lapte [4] => masline [5] => cadouri )



?>