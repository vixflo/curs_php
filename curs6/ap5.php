<?php

$an = rand(2000,2022);
$zi = rand(1,31);
$luna = rand(1,12);

printf('Ziua generata este: %s ', $zi.'/'.$luna.'/'.$an. '<br>');
printf('Ziua generata este: %02d-%02d-%04d ', $zi,$luna,$an);