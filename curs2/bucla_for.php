<?php

/*
    1. bucle for, while si foreach

for          - se foloseste cand avem nevoie sa repetam de mai multe ori un bloc de cod si atunci cand stim de cate ori se va
               executa codul repetitiv
while         - se foloseste atunci cand nu stim de cate ori se va repeta codul dar stim ca trebuie sa il executam pana la
               indeplinirea conditiilor acesta va executa codul din nou si din nou pana indeplineste conditia
do...while    - acesta va executa un bloc de cod doar o data, indiferent daca conditia este indeplinita sau nu si doar dupa
               aceia o va verifica si in functie de rezultatul verificarii va executa din nou respectivul bloc de cod pana la indeplinirea conditiei
foreach      - acesta se foloseste pentru a tranversa sirurile va executa un bloc de cod de cate ori este nevoie pentru a
               trece prin toti membri unui sir

*** for ***

for (iniţializare; condiţie; incrementare) {
        bloc de instrucţiuni;
    }

*/

/*
 In acest exercitiu vom folosi bucla for :
    Mai intai vom adauga cuvantul cheie 'for' apoi definim variabila care va reprezenta contorul (initializaton;) si vom atribui valoarea "0" ex: ($i=0; astfel contorul incepe de la 0).
    Dupa aceia verificam conditia (condition;) daca contorul este mai mic de 10 $i<10;
    In cele din urma definim incrementarea (increment) unde vom creste valoarea contorului cu 1 $i++

*/

# exercitiul 1

//  for($i=0;$i<10;$i++)  // echo "text <br>";  // pentru o singura linie de cod

//  {  
 
/* 
     sau folosim acolade pentru un bloc de cod unde atribuim valoarea asa I= urmat de concatenarea . apoi adaugam valoarea    variabile i adica $i urmata di nou de concatenarea . si mutare intrun rand nou "<br>" 
*/

//  echo"i=" . $i . "<br>";

//  }

//  echo "test";

# exercitiul 2

 for($i=0;$i<10;$i++) { ?>

 In aceasta zona nu vom avea cod php.
 Putem sa scriem orice cod dorim.

 <?php } ?>

