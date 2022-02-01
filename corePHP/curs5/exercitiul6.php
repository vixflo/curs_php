<?php

//6
declare(strict_types = 1); // strict requirement
//Functii supraîncarcate (overloading) in PHP
function myTest()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs \n";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . "\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "\n";
    }
}

myTest(12, 14, 16, 18, 20);







?>