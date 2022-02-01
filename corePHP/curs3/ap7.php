<?php
define("NOTA","10");
$nota=NOTA-5;

switch ($nota) {
    case '4':
       echo '1. Ai nota ' .$nota. ' insuficient';
            break;
    case '6':
        echo '2. Ai nota ' .$nota. ' suficient';
            break; 
    case '8':
        echo '3. Ai nota ' .$nota. ' bun';
            break;
    case '10':
        echo '4. Ai nota ' .$nota. ' bursier';
            break;                        
    default:
        echo 'Nu ai luat nota' ;
             break;
}

// if($nota<5){
//     echo '1. Ai nota ' .$nota. ' insuficient';
// }
// elseif($nota<=6){
//     echo '1. Ai nota ' .$nota. ' suficient';
// }
// elseif($nota<=8){
//     echo '1. Ai nota ' .$nota. ' bun';
// }
// elseif($notaU<=10){
//     echo '1. Ai nota ' .$nota. ' bursier';
// }
// else{
//     echo 'Nu ai luat nota' ;
// }
?>