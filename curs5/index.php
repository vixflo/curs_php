<?php

$status="test";

$numbers = array(
            "012 256 365",
            "012 256 365",
            "012 256 672",
            "012 256 543",
            "012 256 843",
            "012 256 623"
);

if ($status === "admin") {
    foreach ($numbers as $index => $value) {
        echo "Number" . ": " . $value . "<br>";
    }
} else {
    /*
    foreach ($numbers as $index => $value) {
        $value=substr_replace($value,"*** *",4,5);
        echo "Number" . ": " . $value . "<br>";
    }
    */

    foreach ($numbers as $index => $value) {
        $num="";
        for ($i=0; $i < strlen($value); $i++) { 
            if ($i > 3 && $i < (strlen($value) -2 ) && $i!=7) {
                $num .= "*";
            }
            else {
                $num .= $value[$i];
            }
        }
        echo "Number" . ": " . $num . "<br>";
    }
}





?>