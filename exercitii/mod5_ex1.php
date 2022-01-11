<?php

// Exerciţiul 1

/* În aceasta aplicaţie, avem următoarea variabilă:  */

    // $string = "myMail@mail.ml";

/* Vom scrie expresia regulată cu care se va verifica dacă valoarea variabilei este o adresa de e-mail */

// Aplicatia va arata astfel:

$string = "myMail@mail.ml";
$pattern = "/^[a-zA-Z0-9]+\@[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/";
echo preg_match($pattern,$string);

/*
Funcţia preg_match verifică suprapunerea stringului cu patternul definit. Trebuie doar explicată expresia regulată definită. Cu simbolul ^ se defineşte începutul expresiei, după care urmează un şir de caractere permise de la a la z (indiferent de majuscule şi minuscule). De asemenea, este permis să se seteze şi cifre, ceea ce definim cu intervalul cuprins între 0 şi 9. Acest şir poate să apară de mai multe ori. Apoi se cere introducerea caracterului @, urmat de şirul de caractere deja cunoscut. De asemenea, se cere şi introducerea punctului urmat de şirul de caractere asemănător cu cel menţionat, dar fără permisiunea de introducere a cifrelor. Acest ultim şir trebuie să aibă 2 sau 3 caractere, după care urmează finalul patternului. 
*/

?>