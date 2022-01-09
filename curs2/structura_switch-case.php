<?php

/*
switch ($variable) {
    case 'value 0':
        echo "variable has a value 0";
        break;

    case 'value 1':
        echo "variable has a value 1";
        break;

    case 'value 2':
        echo "variable has a value 2";
        break;        

    default:
        echo "unknown value of the variable";
        break;
}
*/

// $x = 1;
// switch ($x) {
//     case '0':
//         echo "x is 0";
//         break;
//     case '1':
//         echo "x is 1";
//         break;    
//     case '2':
//         echo "x is 2";
//         break;
//     default:
//         echo "x is unknown";
//         break;
// }

$food = "apple"; // in acest mod se va afisa (apple) deoarce este adevarata, la schimbarea conditiei variabilei vom avea alt raspuns 

switch ($food) {
    case 'apple':
        echo "apple";
        break;
    case 'cake':
        echo "cake";
        break;    
    case 'tomato':
        echo "tomato";
        break;
    default:
        echo "empty";
        break;
}


?>