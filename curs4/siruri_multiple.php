<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Arrays </title>
</head>
<body>
<p>
<?php 

# exercitiul 1
// $colors = array( 'red', 'green', 'blue' );
// echo "First color in array " . $colors[0] . "<br>";
// echo "Second color in array " . $colors[1] . "<br>";
// echo "Third color in array " . $colors[2] . "<br>";

# Exercitiul 2
/* Şirurile multidimensionale */
// $cars = array(
//     array("BMW",'525',2015),
//     array("Audi",'A8',2014),
//     array("Fiat",'500L',2015),
//     array("Dacia",'Logan',2018)
//   );
   
//   foreach($cars as $car){
//     echo "Brand: " . $car[0] . ", model: " . $car[1] . ", age: " . $car[2] . ".</br>";
//   }

  # Exercitiul 3
/* Funcţiile pentru lucrul cu şirurile
    count(), sizeof() = atunci când sunt aplicate unui şir, majoritatea funcţiilor obişnuite produc rezultate diferite în comparaţie cu aplicarea lor asupra unei simple variabile si ambele funcţii returnează ca valoare numărul elementelor din şir.
*/

//   $my_array = array("red","green","blue","yellow","purple");
 
//   echo(sizeOf($my_array));
//   echo "<br/>";
//   echo(count($my_array));

  # Exercitiul 4
/* Functiile: sort(), asort(), rsort(), ksort(), krsort() Aceste funcţii se utilizează pentru sortarea elementelor din şir. PHP stochează elementele şirului în ordinea în care au fost create, dar cu ajutorul funcţiilor este posibilă sortarea şirului în ordinea dorită
 - Funcţia sort() sortează şirul în ordine crescătoare
 - Funcţia asort() forteaza un element să-și păstreze indexul existent
 - Funcţia rsort() ordonează şirul în ordine descrescătoare
 - Funcţia ksort() ordonează şirul în ordine crescătoare în funcţie de indexuri
 - Funcţia krsort() ordonează şirul în ordine descrescătoare
*/
// $city[0] = "Bucharest";
// $city[1] = "Los Angeles";
// $city[2] = "New York";

// echo sort($city);

 # Exercitiul 5
/* shuffle()  Se utilizează pentru aranjarea arbitrară a elementelor din şir. */

// $my_array = array("red","green","blue","yellow","purple");
 
// shuffle($my_array);
// print_r($my_array);
// // Se afiseaza: Array ( [0] => green [1] => purple [2] => yellow [3] => red [4] => blue )

 # Exercitiul 6
/* În PHP, se poate crea un şir nou ca o submulţime a unui şir deja existent, prin funcţia array_slice() De ex:   array_slice( $numeȘir, poziţie, lungime ) 
*/
// $testarray = array("red", "green", "blue", "pink" );
// $subArray = array_slice( $testarray, 1, 2 );

// print_r($testarray);

 # Exercitiul 7
 /* explode(),  implode() Aceste două funcţii se utilizează pentru convertirea stringului în şir şi invers.
 $arrName = explode( "sign", $string );
Primul argument al acestei funcţii (sign) determină caracterul care va fi utilizat pentru separarea stringului. Al doilea argument este textul care se împarte în secţiuni. Fiecare parte devine un element al şirului.
 */

// $someWords = "Please don't blow me to pieces."; 
 
// $wordChunks = explode(" ", $someWords);
// for($i = 0; $i < count($wordChunks); $i++){
//     echo "Piece $i = $wordChunks[$i] <br />";
// }

/* În mod similar, elementele şirului pot fi unite într-un string cu ajutorul funcţiei implode(): */

// $words = array("Please", "don't", "blow", "me", "to", "pieces.");
// $str = implode(" ", $words);
// echo $str;

 # Exercitiul 8
 /* array_diff( $șir1, $șir2, ... ) Această funcţie identifică toate elementele care se găsesc în primul şir ($array1), însă nu şi în celelalte şiruri. */

//  $a1=array("a"=>"BMW","b"=>"Audi","c"=>"Fiat","d"=>"Opel");
// $a2=array("e"=>"BMW","f"=>"Audi","g"=>"Peugeot");
// $a3=array("a"=>"BMW","b"=>"Peugeot","h"=>"KIA");
 
// $result=array_diff($a1,$a2,$a3);
// print_r($result);

 # Exercitiul 9
/* array_sum() Această funcţie adună valorile care sunt elementele unui şir. */

// $a=array(5,15,25);
// echo array_sum($a); // Rezultatul este 45.

 # Exercitiul 10
/* array_unique() Cu ajutorul acestei funcţii, pot fi eliminate elementele identice ale unui şir. */

// $a=array("a"=>"BMW","b"=>"Audi","c"=>"BMW");
// print_r(array_unique($a)); // Rezultatul obţinut pe pagină este: Array ( [a] => BMW [b] => Audi )

 # Exercitiul 11
/* Aceasta aplicaţie va sorta acest şir, astfel încât valorile să fie aranjate în ordine crescătoare, de la cea mai mică la cea mai mare. */

// $arr = array( 2, 5, 1, 7, 4, 3, 8 );
// for( $i = 0; $i < sizeof( $arr ); $i++ )
// {
//     $min = $i;
//     for( $u = $i; $u < sizeof( $arr ); $u++ )
//         {
//             if( $arr[ $u ] < $arr[ $min ] )
//                    $min = $u;
//         }   
//         $tmp = $arr[ $i ];
//         $arr[ $i ] = $arr[ $min ];
//         $arr[ $min ] = $tmp;
// }
// print_r( $arr );
// // Şirul sortat la ieşire este: Array ( [ 0 ] => 1 [ 1 ] => 2 [ 2 ] => 3 [ 3 ] => 4 [ 4 ] => 5 [ 5 ] => 7 [ 6 ] => 8 )


 # Exercitiul 12
/* Array_fill() Dacă dorim să formăm un șir populat cu o valoare statică, putem utiliza această funcţie, unde primul parametru este indexul de început al şirului, al doilea parametru este numărul membrilor inseraţi, iar
ultimul parametru este valoarea care se inserează. */

// $x = array_fill( 0, 10, "hello" );
// print_r( $x );

// Acest cod returnează:
// Array ( [0] => hello [1] => hello [2] => hello [3] => hello [4] => hello [5] => hello [6] => hello [7] => hello [8] => hello [9] => hello )

 # Exercitiul 13
/* Array_flip() - Schimbă poziţiile cheilor şi ale valorilor, dacă şirul este alcătuit din chei şi valori, această funcţie va înlocui cheile şi valorile, iar dacă şirul nu are chei, ci doar indexuri, această funcţie va înlocui indexurile membrilor cu valorile membrilor. */

// $arr = array("Romania" => "Bucharest", "France" => "Paris", "England" => "London");
// $x = array_flip($arr);
// print_r($x);

// Acest cod returnează:
// Array ( [Bucharest] => Romania [Paris] => France [London] => England )

 # Exercitiul 14
/*  */




 ?>
</p>  
</body>
</html>

