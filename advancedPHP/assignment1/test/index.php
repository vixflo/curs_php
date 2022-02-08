<?php
include_once 'User.php'; // Includem clasa User.php

// Cream instante de obiecte la clasa User
$user1 = new User(1, "Minor", "Ion", 17); //minor
$user2 = new User(2, "Major", "Vasile", 19); //major

//  Apelam cele doua metode

echo $user1->nume_prenume(); 
echo "<br>";
var_dump($user1);
echo "<br>";

echo $user2->nume_prenume();
echo "<br>";
var_dump($user2);
