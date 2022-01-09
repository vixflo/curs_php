<?php
// creates a new array of five elements
$colors = array('red', 'green', 'blue', 'yellow','white');
 
for ($i = 0;       $i < sizeof($colors); $i++)
//  (initializare;      conditie;        incrementare;)
{
    // bloc de comenzi
    $br = $i + 1;
    echo "Value of element $br is $colors[$i].";
}
?>