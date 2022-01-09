<?php

// $nr = rand(1,10);
// switch ($nr) {
//     case '2':
//         # code...
//         break;
//     case '4':
//         # code...
//         break;
//     case '6':
//         # code...
//         break;
//     case '10':
//         echo 'Numarul ' .$nr. ' este par';
//         break;

//     default:
//          echo 'Numarul ' .$nr. ' este par';
//         break;
// }

$nr = rand(1,10);
switch ($nr) {
    case '2':
    case '4':
    case '6':
    case '8':       
    case '10':
        echo 'Numarul ' .$nr. ' este par';
        break;
    default:
         echo 'Numarul ' .$nr. ' este impar';
        break;
}

?>