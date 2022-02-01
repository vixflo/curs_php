<?php

// Functiile:
//      include
//      require

//      include_once
//      require_once

//  funcţia include, va afisa o eroare (E_WARNING) dar nu va întrerupe executarea programului dacă din diverse motive fişierul nu este gasit
//  funcţia require, va întrerupe executarea programului (E_COMPILE_ERROR) dacă din diverse motive fişierul nu este gasit

include('variabile.php');
$name = "Thomas";
$passwors = "Thomas12345";

echo $x + $y;

?>