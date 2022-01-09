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

for (initializare; conditie; incrementare)

{

    blocuri de cod

}

*/

// for($i=0;$i<10;$i++) 
// {
//   // echo "text <br>";

// echo"i=" . $i . "<br>";

// }
// echo "test";

// exemplu de mai jos se foloseste atunci cand in interiorul acoladelor {} nu se executa un cod php
for($i=0;$i<10;$i++) {?>
<!-- aici putem scrie orice tip de cod sau doar un text simplu -->
 
    <p> This is sample text </p>
    <img src="https://cdn.iconscout.com/icon/free/png-256/php-28-226043.png" alt="img">

<?php } ?>
