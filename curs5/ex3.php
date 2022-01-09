<?php

/*
Exercitiul 3 Brad
Generati un brad de craciun
*/

$levels = 7;
$b = 8;
$c = 5;
$y = "|//|<br>";


for ($i=0; $i < $levels; $i++) { 
    for ($j=0; $j < floor(($levels - $i)); $j++) { 
        echo "&nbsp;&nbsp;";
    }
    for ($j=0; $j < (2 * $i) - 1; $j++) { 
        echo "*";
    }
    echo "<br>";
    $trunchi = "<div style='font-family:monospace;text-align:center;color:#094'>";
}
echo $trunchi . $y.$y . "</div>";

