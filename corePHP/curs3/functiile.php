<?php

/*
Funcţia este o structură de program care este capabilă să execute o operaţiune pe baza unor parametri primiţi sau fără aceştia şi să returneze un rezultat după completarea operaţiunii.

    Ex:
        function functiaMea($parametru1, $parametru2){
            echo "acesta este corpul functiei";
        }
Avantajele caracteristicilor funcţiilor sunt:

        încapsularea;
        reducerea redundanţei codului;
        viteza de codare;
        mentenanţă mai uşoară a codului;
        fiabilitate.
*/
# Exercitiul 1
/*
    Această abordare, nu numai că face posibilă reducerea dimensiunii codului, dar duce şi la centralizarea codului, respectiv la manipularea simplificată a diverselor mecanisme care în cod se execută prin funcţii.
    Să presupunem că exemplul cu steluţele nu a demonstrat încă adevăratele avantaje ale funcţiilor şi că este mai uşor dacă acest rând este copiat de mai multe ori. Dar să presupunem că ne dorim ca ieşirea noastră cu steluţele să aibă un conţinut dinamic.
    În acest caz, pe lângă copierea steluţelor, ar mai trebui ca pe fiecare rând să scriem numele oraşului, să ştergem şi să adăugăm steluţe la sfârşitul rândului, pentru a le alinia.

        Codul ar arăta astfel:
        <?php
        echo "************************************ Belgrade **************************************";
        echo "<br>Text about Belgrade<br>";
        echo "************************************* Paris ****************************************";
        echo "<br>Text about Paris<br>";
        echo "************************************* London **************************************";
        echo "<br>Text about London<br>";
        ?>
    Folosind funcţia, acest cod s-ar putea rezolva astfel:
 */
// function stars( $cityName )
// {
// for( $i=0; $i<35; $i++ )
// echo "*";
// echo " " . $cityName . " ";
// for( $x= ( $i + 2 ) + strlen ( $cityName ); $x < 90; $x++ )
// echo "*";
// }
 
// stars( "Belgrade" );
// echo "<br> Text about Belgrade <br>";
// stars( "Paris" );
// echo "<br> Text about Paris <br>";
// stars( "London" );
// echo "<br> Text about London <br>";

// textul afisat este:

// ************************************ Belgrade **************************************
// Text about Belgrade
// ************************************* Paris ****************************************
// Text about Paris
// ************************************* London **************************************
// Text about London

# Exercitiul 2
/*
    Funcţiile pot fi apelate din orice parte a codului PHP. După apelarea funcţiei, aceasta preia parametrii expediaţi (dacă aceştia există), apoi execută anumite instrucţiuni şi returnează valoarea obţinută către program:
 */
// function add($num1, $num2){
//     return $num1 + $num2;
//    }
//    echo "The sum of 5 and 2 is  " . add(5, 2); 

// textul afisat este: The sum of 5 and 2 is 7

# Exercitiul 3
/*
    Este posibilă şi crearea funcţiei, care poate (dar nu este neapărat) să primească parametri fără ca o eroare să fie produsă. În acest scop, sunt setate valorile default ale parametrilor:
 */
// function add($num1 = 3, $num2 = 4){
//     return $num1 + $num2;
//    }
//    echo "Result is " . add(); 

// textul afisat este: Result is 7

# Exercitiul 4
/* 
    Variabilele care se utilizează în interiorul corpului funcţiei se numesc variabile locale. Acestea nu pot fi accesate din afara funcţiei. Dacă, totuşi, trebuie să accesăm aceeaşi variabilă atât din corpul funcţiei, cât şi din afara sa, această variabilă trebuie declarată ca fiind globală, utilizând cuvântul-cheie global. Variabilele globale există şi în exteriorul funcţiilor în care sunt definite.
    Variabila $name este creată în interiorul funcţiei, dar prin utilizarea cuvântului-cheie global este declarată ca variabilă globală, ceea ce înseamnă că aceasta va exista şi în exteriorul funcţiei. Când funcţia este apelată, variabila $name se creează şi i se acordă o valoare. Această valoare se poate utiliza şi mai târziu în cod (instrucţiunea echo).
*/
// function format_name( $first_name ,$last_name){
//     global $name;
//     $name = $first_name." - ".$last_name;
// }
// format_name( "Peter", "Andersen" );
// echo $name;

// textul afisat este: Peter - Andersen

# Exercitiul 5
/*
    Se pot seta valori default pentru parametri, care vor fi utilizate dacă în timpul apelării nu vor fi utilizate toate valorile parametrilor.
    Analizând comportamentul codului de mai sus, observăm că pentru valoarea parametrului $num1 este preluat numărul 10, care este apoi transmis în timpul apelării funcţiei. Deoarece al doilea parametru nu este transmis, este preluată valoarea default 1. Din cauza unui astfel de comportament, funcţia returnează valoarea 11
*/
// function add_2_numbers( $num1=1, $num2=1 ){
//     $total = $num1 + $num2;
//     return $total;
// } 
// echo add_2_numbers(10);

// textul afisat este: 11

# Exercitiul 6
/*
    Atunci când expediaţi o variabilă către o funcţie, se expediază de fapt valoarea ei. Orice schimbare făcută asupra variabilei expediate nu va afecta valoarea sa originală.
    În momentul apelării, către funcţia add_1() se transmite valoarea conţinută în variabila $orig_num. Instrucţiunile din interiorul funcţiei nu afectează variabila, motiv pentru care instrucţiunea echo va scrie numărul 3, adică valoarea iniţială a variabilei $orig_num.
    De exemplu:
*/
// function add_1($num1){
//     $num1 = $num1 + 1;
// }
// $orig_num = 3;
// add_1($orig_num);
// echo $orig_num;

// textul afisat este: 11

# Exercitiul 7
/*
    Trebuie să scrieţi o funcţie care transmite un număr care reprezintă temperatura exprimată în grade Fahrenheit şi o transformă în grade Celsius. Deci, în locul apelării, funcţia returnează un număr care reprezintă temperatura exprimată în grade Celsius. La următorul link găsiţi o formulă de calcul şi un tabel prin care comparaţi exactitatea rezultatelor:
*/
 
// $faren = 68;
// function temperature($faren){
//         $cels= ($faren - 32) / (9/5);
//         return $cels;
// }
// echo $faren ." degrees in Fahrenheit is " .temperature($faren) . " degrees in Celsius.";
 
# Exercitiul 9
/*
Trebuie să se creeze o funcție care va accepta ca parametri tipul cu formă geometrică (pătrat, dreptunghi sau cerc) și valorile a și b. În funcție de forma geometrică, se calculează aria sa și se returnează rezultatul.
*/

// define("SQUARE", 0);
// define("RECTANGLE", 1);   
// define("CIRCLE", 2);   
// define("PI", 3.14); 
// function area($type, $a, $b = 0){
//     $rez = 0;
//     switch($type)
//         {
//             case SQUARE:
//                 $rez = pow($a, 2);
//                 break;
//             case RECTANGLE:
//                 $rez = $a * $b;
//                 break;
//             case CIRCLE:
//                 $rez = pow($a, 2) * PI;
//                 break;
//         }
//     return $rez;
// }
// echo area(CIRCLE, 4);

# Exercitiul 10

// foreach ($_SERVER as $var => $value)
//     echo $var . ":" . $value . '<br />';

    printf('Your IP address is: %s ', $_SERVER['REMOTE_ADDR'] );

?>