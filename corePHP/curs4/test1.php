<?php
/*
// 1 Siruri numerice -  șiruri care au indexuri numerice

Afisam un sir numeric de tip string:
$arr = array('pencil', 'notebook','book');

 // Se afiseaza "notebook" deoarece numaratoarea incepe de la 0, 1, 2
echo $arr[1];

 // Php va sorta automat, ordinea stringurilor incepe de la 0
$arr[] = 'pencil'; // acest element va avea indexul 0;
$arr[] = 'notebook'; // acest element va avea indexul 1;
$arr[] = 'book'; // acest element va avea indexul 2;

 // Vom defini manual, ordinea elementelor din sir
$arr[0] = 'pencil';
$arr[1] = 'notebook';
$arr[2] = 'book';


// 2 Siruri asociativ -  șiruri care au indexuri text în loc de indexuri numerice

$arr = array('name' => 'Thomas' , 'tel' => '012 11 22 33');

echo $arr['tel'];

$arr['name'] = 'Thomas';
$arr['tel'] = '012 11 22 33';

*/

// 2 Siruri multidimensionale

$arr = array('name' => 'Thomas' ,
             'tel' => '012 11 22 33',
             'location' => array('London','Paris') 
            );

 // echo $arr['location'][1];   
 
 if (array_search("Thomas",$arr)) {
     echo "Mame exists";

 }else {
     echo "Name does not exists";
 }



?>