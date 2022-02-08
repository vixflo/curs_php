<?php
include_once 'User.php'; // Includem clasa User.php


function displayCompareAge($user){
    if($user instanceof User){
        if($user->isAdult()){
            echo " este adult";
        }
        else{
            echo " nu este adult";
        }
    }
}

$major = new User(1, "Popescu", "Ion", 19);
$minor = new User(2, "Popescu", "Ion", 17);

echo $major->getCompleteName();
echo " ".displayCompareAge($major)."<br>";
echo $minor->getCompleteName();
echo " ".displayCompareAge($minor);
