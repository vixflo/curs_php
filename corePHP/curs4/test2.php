<?php
/*
Perechile de şiruri (şirul asociativ)
Pe lângă şirurile în care fiecare membru are o poziţie proprie, determinată prin index, care reprezintă o valoare numerică, se poate crea şi un şir în care valorile sunt legate de anumite chei în acest şir, respectiv stringuri care se asociază la o valoare.
*/
// // 1. Ex: 
// $arr = array("Romania"=>"Bucharest", "France"=>"Paris", "England"=>"London"); 
// // valorile din partea stângă a semnului => reprezintă cheia, iar valoarea din dreapta reprezintă valoarea cheii respective
// echo $arr["Romania"];
// // această linie de cod va emite valoarea pentru cheia "Romania", care în acest caz este "Bucharest".

/*
Şirul multidimensional
 Aceste şiruri sunt foarte utile pentru lucrul cu datele în formă de matrice sau tabel.
*/
// 1. Şir bidimensional - Ex: 

// $arr = array();
//     $arr[0] = array(1, "John", "Miller", "1111111111111");
//     $arr[1] = array(2, "Peter", "Andersen", "2222222222222");
//     $arr[2] = array(3, "Ana", "Newman", "3333333333333");

// sau 

// $arr = array(
//     array( 1, "John", "Miller", "1111111111111" ),
//     array( 2, "Peter", "Andersen", "2222222222222" ), 
//     array( 3, "Ana", "Newman", "3333333333333")
// );
//  //   echo $arr[1][2]; // dacă vrem să obţinem numele de familie Andersen

//  // daca folosim o bucla:
//  for($i=0; $i<count($arr); $i++){
//     echo $arr[$i][1]."<br>";
// }
//  // iar dacă vrem să publicăm toate datele din tabel vom scrie asa:

//  for($i=0; $i<count($arr); $i++){
//     echo $arr[$i][0] . " " . $arr[$i][1] . " " . $arr[$i][2] . " " . $arr[$i][3] ."<br>";
// }

?>