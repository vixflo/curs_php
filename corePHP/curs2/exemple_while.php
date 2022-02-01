<?php
/*

    1. bucle: for, while si foreach

for          - se foloseste cand avem nevoie sa repetam de mai multe ori un bloc de cod si atunci cand stim de cate ori se va
               executa codul repetitiv
while         - se foloseste atunci cand nu stim de cate ori se va repeta codul dar stim ca trebuie sa il executam pana la
               indeplinirea conditiilor acesta va executa codul din nou si din nou pana indeplineste conditia
do...while    - acesta va executa un bloc de cod doar o data, indiferent daca conditia este indeplinita sau nu si doar dupa
               aceia o va verifica si in functie de rezultatul verificarii va executa din nou respectivul bloc de cod pana la indeplinirea conditiei
foreach      - acesta se foloseste pentru a tranversa sirurile va executa un bloc de cod de cate ori este nevoie pentru a
               trece prin toti membri unui sir

*** while ***

while(condition)
{

    code to be executed;

}


*/

// $i=0;
// while ($i <10) {
//     echo $i . "<br>";
//     $i++;
// }

// do {
//     echo $i . "<br>";
//     $i++;
// }
//  while ($i > 10);
//  echo $i;

$price = 4;                                        // variabila $price indica valoarea pentru produs
$quantity = 10;                                    // variabila $quantity indica cantitatea produselor
echo "<table border = \"1\" align = \"center\" >"; // includem o structura HTML (table) in interiorul php (string)
echo "<tr><th> Quantity </th>";                    // Deschidem un rand <tr> si definim textul antetului in coloanele <th>
echo "<th>Price </th></tr>";                       // Inchidem tagurile pentru coloanele antet </th> si </tr> pentru rand

// deschidem bucla while si avem conditia urmatoare: cantitatea este mai mica sau egala cu 100 (bucla se repeta pana ajuge la aceasta valoare)
while ($quantity <= 100) {
    echo "<tr> <td>";                                 // Deschidem in acest tabel un nou rand <tr> si adaugam coloanele <td>
    echo $quantity;                                   // In aceasta coloana <td> afisam valoarea pentru cantitate
    echo "</td> <td>";                                // Aici inchidem prima coloana </td> si deschidem urmatoarea coloana <td>
    echo $price * $quantity;                          // Afisam rezultatul obtinut din imultirea pretului cu cantitatea produselor
    echo "</td> </tr>";                               // Inchidem coloanele si randul 
    $quantity = $quantity + 10;                       // Aici folosim contorul variabilei $quantity si o marim cu 10 (astfel afisam pretul pentru toate cele 10 produse)

}
echo "</table>";                                       // Aici scrimem comanda de inchidere a tabelului

/*       Nota
  Daca dorim sa extindem acest tabel modificam valoarea conditiei while din ($quantity <= 100) cu ($quantity <= 1000) sau orice alta valoare dorim noi sa scriem aici.
*/
?>