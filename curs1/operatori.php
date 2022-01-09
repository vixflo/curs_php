<?php

/*
    Operatori aritmetici
        Operatorii aritmetici PHP sunt utilizați cu valori numerice pentru a efectua operații aritmetice comune, cum ar fi adunarea, scăderea, înmulțirea etc.
*/

//   +       Adunare     ex: $x + $y     = Suma adunata dintre $x si $y
//   -       Scadere     ex: $x - $y     = Diferenta dintre suma scazuta din $x minus $y
//   *       Imultire    ex: $x * $y     = Suma optinuta prin imultirea $x cu $y
//   /       Impartire   ex: $x / $y     = Suma optinuta prin impartirea $x cu $y
//   %       Procent     ex: $x % $y     = Suma optinuta este restul lui $x împărțit la $y
//  **       Exponential ex: $x ** $y    = Suma optinuta prin ridicarea la putere $x la $y 

/*
    Operatori de atribuire PHP
        Operatorii de atribuire PHP sunt utilizați cu valori numerice pentru a scrie o valoare într-o variabilă.
        Operatorul de atribuire de bază în PHP este „=". Înseamnă că operandul din stânga este setat la valoarea expresiei de atribuire din dreapta.
*/

//  x = y           sau     x = y        = Operandul din stânga este setat la valoarea expresiei din dreapta
//  x += y	        sau     x = x + y    = Operatie de adunare 
//  x -= y	        sau     x = x - y    = Operatie de scadere
//  x *= y	        sau     x = x * y    = Operatie de imultire
//  x /= y	        sau     x = x / y    = Operatie de impartire
//  x %= y	        sau     x = x % y    = Operatie de ridicare la putere

/*
    Operatori de comparare PHP
        Operatorii de comparare PHP sunt utilizați pentru a compara două valori (număr sau șir):
*/

//  ==	   Egal	                   ex: $x == $y     = Returnează adevărat dacă $x este egal cu $y
//  ===	   Identic	               ex: $x === $y    = Returnează adevărat dacă $x este egal cu $y și sunt de același tip
//  !=	   Nu este egal	           ex: $x != $y     = Returnează adevărat dacă $x nu este egal cu $y
//  <>	   Nu este egal	           ex: $x <> $y     = Returnează adevărat dacă $x nu este egal cu $y
//  !==	   Nu este identica	       ex: $x !== $y    = Returnează adevărat dacă $x nu este egal cu $y sau nu sunt de același tip
//  >	   Mai mare ca	           ex: $x > $y      = Returnează adevărat dacă $x este mai mare decât $y
//  <	   Mai mic ca	           ex: $x < $y      = Returnează adevărat dacă $x este mai mic decât $y
//  >=	   Mai mare sau egal cu    ex: $x >= $y     = Returnează adevărat dacă $x este mai mare sau egal cu $y
//  <=	   Mai mic sau egal cu     ex: $x <= $y     = Returnează adevărat dacă $x este mai mic sau egal cu $y
//  <=>	   Spaceship	           ex: $x <=> $y    = Returnează un număr întreg mai mic, egal cu sau mai mare decât zero, în funcție de dacă $x este mai mic, egal cu sau mai mare decât $y.
/*
 *** Nota
    PHP 7 a introdus un nou tip de operator numit operator de navă spațială. Operatorul navei spațiale sau operatorul de comparație combinat este notat cu „<=>“. Acești operatori sunt utilizați pentru a compara valori, dar în loc să returneze rezultatele booleene, returnează valori întregi. Dacă ambii operanzi sunt egali, returnează 0. Dacă operandul drept este mai mare, returnează -1. Dacă operandul din stânga este mai mare, returnează 1.
*/

/*
    Operatori de incrementare/decrementare PHP
        Operatorii de increment PHP sunt utilizați pentru a incrementa (creste) valoarea unei variabile.
        Operatorii de decrementare PHP sunt utilizați pentru a decrementa (scade) valoarea unei variabile.
*/

//  ++$x	Pre-Incrementare                    = Incrementeaza (crește) $x cu unul, apoi returnează $x	
//  $x++	Post-Incrementare                   = Returnează $x, apoi incrementează (creste) $x cu unu
//  --$x	Pre-Incrementare                    = Decrementeaza (scade) $x cu unul, apoi returnează $x	
//  $x++	Post-Incrementare                   = Returnează $x, apoi decrementează (scade) $x cu unu

/*
    Operatori logici PHP
        Operatorii logici PHP sunt utilizați pentru a combina două valori booleene și a returna un rezultat true, false sau null. Operatori logici se mai numesc și operatori booleeni.
*/

//  and   sau   And	      ex: $x and $y         = Returneaza adevărat dacă atât $x, cât și $y sunt adevărate
//  or	  sau   Or	      ex: $x or $y          = Returneaza adevărat dacă $x sau $y este adevărat
//  xor	  sau   Xor	      ex: $x xor $y         = Returneaza adevărat dacă $x sau $y este adevărat, dar nu ambele
//  &&	  sau   And	      ex: $x && $y          = Returneaza adevărat dacă atât $x, cât și $y sunt adevărate
//  ||	  sau   Or	      ex: $x || $y          = Returneaza adevărat dacă $x sau $y este adevărat
//   !	  sau   Not	      ex: !$x               = Returneaza adevărat dacă $x nu este adevărat

/*
    Operatori șiruri sau operatori de concatenare 
        PHP are doi operatori special proiectați pentru șiruri.
        Operatorii de concatenare sunt utilizați pentru a combina două valori text într-una.
*/

//  .   Concatenare	                ex: $X . $Y       = Concatenarea lui $X și $Y
//  .=	Atribuirea concatenării 	ex: $X .= $Y      = Mai întâi concatenează apoi alocă, la fel ca $x = $x.$y

/*
    Operatori PHP Array 
        Operatorii de matrice PHP sunt utilizați pentru a compara matrice.
*/

//  +	 Adunare	      ex: $x + $y	 Aduna valoarea $x cu $y	
//  ==	 Egalitate	      ex: $x == $y   Returnează adevărat dacă ambele au aceeași valoare	
//  ===	 Identic	      ex: $x === $y  Returnează adevarat dacă ambele au aceeași valoare în aceeași ordine și de același tip	
//  !=	 Inegal	          ex: $x != $y   Returnează adevărat dacă $x nu este egal cu $y	
//  <>	 Inegalitate	  ex: $x <> $y   Returnează adevărat dacă $x nu este egal cu $y	
//  !==	 Nu este identic  ex: $x !== $y  Returns true if $x is not identical to $y

/*
    Operatori PHP de atribuire condiționată 
        Operatorii PHP de atribuire condiționată sunt utilizați pentru a seta o valoare în funcție de condiții:
*/

//  ?:	Ternary	            ex:$x = expr1 ? expr2 : expr3	    = Returnează valoarea lui $x.
//                                                              = Valoarea lui $x este expr2 dacă expr1 este ADEVARAT.
//                                                              = Valoarea lui $x este expr3 dacă expr1 este FALS.
//  ??	Null coalescing	    ex:$x = expr1 ?? expr2	            = Returnează valoarea lui $x.
//                                                              = Valoarea lui $x este expr1 dacă expr1 există și nu este NULA.
//                                                              = Dacă expr1 nu există sau este NULA, valoarea lui $x este expr2.
//  ?? - A fost introdus odata cu lansarea lui PHP 7

# Exercitiul 1

// $x = array("k" => "Car", "l" => "Bike");
// $y = array("a" => "Train", "b" => "Plane");

// var_dump($x + $y);
// var_dump($x == $y) + "<br>";
// var_dump($x != $y) + "\n";
// var_dump($x <> $y) + "\n";
// var_dump($x === $y) + "\n";
// var_dump($x !== $y) + "\n";
/*
*/
# Exercitiul 2

// echo (((4*8)-2)/10);
// echo "<br>";
// echo (4*8-2/10);

# Exercitiul 3

// $nr = -12;
// echo ($nr > 0) ? "Numar pozitiv" : "Numar negativ"; 

# Exercitiul 4
// $x = 3 * 3 % 5; // (3 * 3) % 5 = 4
// $y = true ? 0 : true ? 11111 : 2; // (true ? 0 : true) ? 1 : 2 = 2

//  echo $x;
//  echo "<br>";
//  echo $y;

# Exercitiul 5
// print( "a" <=> "a");print("<br>");
// print( "a" <=> "b");print("<br>");
// print( "b" <=> "a");print("<br>");

# Exercitiul 6
// echo $x = 10 + print (25);   // 25  return 1;  10 +1 = 11

# Exercitiul 7
// $b = 90; // ~x = -x - 1  sau  90 -> 1011010   ~ 1011010  +1 = 1011011  =  - 91
// // 90 -> 1011010,  daca bitul din stanga = 1  , numarul final  va fi negativ dupa ~
// echo ~$b;  // -90-1  = -91
// echo ~~$b; // 90


?>
  