<?php
require_once "Sum.php";


$result = new Sum;
// Acces Url: index.php?a=2&b=3 
// The result is: 5
// $result->input($_GET['a'],$_GET['b']);
$result->calculate();
$result->render();

