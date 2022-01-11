<?php

// Exerciţiul 3

/* În aceasta aplicaţie, avem următorul  următorul string url:  */

// $string = "http://myDomain/home/index.php?id=25&cat=18&user=34";

/*  Se cere sa izolam doar domeniul cu folderele şi cu denumirea paginii (myDomain/home/index.php).  */

// Rezolvarea aplicatiei va arata astfel:

$string = "http://myDomain/home/index.php?id=25&cat=18&user=34";
$pars = preg_replace("/http:\/\//","",$string);
$pars = preg_replace("/\?[a-zA-Z0-9=&]+/","",$pars);
print_r($pars);

/*  Cu această problemă este prezentat încă un exemplu de folosire a funcţiei str_replace, dar de data aceasta se folosesc şi expresii regulate. În primul apel al funcţiei se înlătură partea iniţială a stringului, în timp ce în al doilea apel se înlătură stringul final. La final, pe pagină se prezintă rezultatul căutat.   */

/*  Astfel browserul va afisa:   */

// myDomain/home/index.php

?>