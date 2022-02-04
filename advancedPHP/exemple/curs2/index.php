<?php

require_once"config.php";



$gpcard = new \gameplay\Card;
$gpcard->Play();


$pcard = new \payment\Card;
$pcard->pay();

?>