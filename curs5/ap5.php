<?php

 $arr =[
     'ar1'=>array(1,2,3,4,5 ),
     'ar2'=>array(6,7,8,9 ),
     'ar3'=>array(10,11,12,13,14,15),
     16,17,18,19,20
 ];
 
 // $arr = array();
 if (isset($arr) && !empty($arr)){
     foreach ($arr as $a){
         if(is_array($a)){
            foreach ($a as $nr){
                echo $nr. ' ';
            }
        }
        else {
            echo $a . ' ';
        }
     }
 }