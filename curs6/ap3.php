<?php

$sir = "1234567890123456789012345678901234567890"; 
$pozitie4 = strpos($sir, "4");
echo "pozitia lui 4 in sir este $pozitie4";
$urmatorul4 = strpos($sir, "4", $pozitie4 + 1);
echo "<br />pozitia celui de-al doilea 4 este $urmatorul4 ";
$altreilea4 = strpos($sir, "4", $urmatorul4 + 1); // am adaugat in plus
echo "<br />pozitia celui de-al treilea 4 este $altreilea4 ";