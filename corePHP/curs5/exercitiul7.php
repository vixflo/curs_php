<?php

// function addNumbers(int $a, int $b, bool $printSum): bool
// {
//     $sum = $a + $b;
//     if ($printSum) {
//         echo 'The sum is ' . $sum;
//     }
//     return $sum;
// }
// $suma = addNumbers(1, '2', true);
// echo $suma;

//10
// Functii recursive (Functia recursiva se apeleaza pe ea insusi).
// $x ** $y  x la puterea y
// function putere(int $x, int $n)
// {
//     if (($x == 0) && ($n > 0)) {
//         return 0;
//     }

//     if (($x > 0) && ($n == 0)) {
//         return 1;
//     }

//     if (($x > 0) && ($n > 0)) {
//         return $x * putere($x, $n - 1);
//     }

// }

// echo putere(3, 2);
// echo putere(2, 10);


// function drawTags($tname, $style, $content, $count = 1)
// {
//     for ($i = 0; $i < $count; $i++) {
//      // echo "<$tname style'".$style."'> $content </$tname>";
//         echo "<" . $tname . " style='" . $style . "' >" . $content
//             . "</" . $tname . ">";
//     }

// }
// drawTags("div", "border: 1px solid red; background-color:
// yellow; color: red; margin: 4px; padding: 4px;", "Salut", 2);


function sah($nrlinii=8, $nrcoloane=8, $culoare1='white', $culoare2 = 'black')
{
    echo "<table border=1 cellspacing=0 cellpadding=0>";
        for ($nl = 1; $nl <= $nrlinii; $nl++) {
            echo "<tr>";
            for ($col=1; $col <= $nrcoloane; $col++) { 
                $culoare = (($nl + $col) % 2 ? $culoare1 : $culoare2);
                echo "<td bgcolor=$culoare width=50 height=50></td>";
            }
            echo "</tr>";      
        }
    echo "</table>";
}
// sah(3,3,'magenta','green');
sah(8,8,'brown','yellow'); // afisam o tabla de sah





// $users = array(
//          array('id'=>'1', 'fname'=>'Peter', 'lname'=>'Andersen', 'email'=>'peter@gmail.com'),
//          array('id'=>'2', 'fname'=>'John', 'lname'=>'Miller', 'email'=>'john@gmail.com'),
//          array('id'=>'3', 'fname'=>'Thomas', 'lname'=>'Swift', 'email'=>'thomas@gmail.com')
// );