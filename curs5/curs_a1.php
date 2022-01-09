<?php

/*
Manipularea şirurilor
 - Creaţi un şir care va conţine datele prezentate în următorul tabel:

        id	fname	lname	email
        1	Peter	Andersen	peter@gmail.com
        2	John	Miller	john@gmail.com
        3	Thomas	Swift	thomas@gmail.com
*/

// Se creaza sirul de date 

$users = array(
    array("id", 1, 2, 3),
    array("fname", 'Peter', 'John', 'Thomas'),
    array("lname", 'Andersen', 'Miller', 'Swift'),
    array("email", 'peter@gmail.com', 'thomas@gmail.com', 'thomas@gmail.com'),
);

// Construisc un tabel si introduc datele utilizand bucla for

echo "<table border=1 cellspacing=0 cellpadding=0 width=100%><tr>";
for ($row = 0; $row < count($users); $row++) {

    for ($col = 0; $col < count($users[$row]); $col++) {
        echo "<td>" . $users[$col][$row] . "</td>";
    }

    echo "</tr>";
}
echo "</table>";
// Se afiseaza in pagina web, tabelul si datele necesare