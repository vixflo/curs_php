<?php

// Exerciţiul 2

/* În aceasta aplicaţie, avem următoarea variabilă:  */
// $string = "http://myPage.php?id=25&cat=18&user=34";
/* Se cere sa preluaţi toţi parametri şi puneţi-i în şirul asociativ.  */

// Rezolvarea aplicatiei va arata astfel:

$string = "http://myPage.php?id=25&cat=18&user=34";
$pars = explode("?",$string);
$pars = explode("&",$pars[1]);
$parsedPars=array();
for($i=0;$i<sizeof($pars);$i++)
    {
        $currentParam = explode("=",$pars[$i]);
        $parsedPars[$currentParam[0]] = $currentParam[1];
    }
print_r($parsedPars);

/*   Deoarece parametri se află după semnul întrebării în stringul dat, apelăm funcţia explode şi ca separator punem „?”. Acum, avem un şir cu două elemente. Pe poziţia marcată cu indexul 1, se află parametrii care ne interesează. Parametri sunt separaţi între ei cu semnul „&” şi de aceea mai efectuăm un explode. După aceea, în variabila $pars am primit un şir cu trei elemente. Trecem prin bucla for şi scoatem cheile şi valorile. De asemenea, facem asta cu funcţia explode, dar de data aceasta ca separator punem semnul „=”. La final, trebuie doar să prezentăm rezultate pe pagină:   */

// print_r($parsedPars);

/*  Astfel browserul va afisa:   */

// Array ( [id] => 25 [cat] => 18 [user] => 34 )

?>