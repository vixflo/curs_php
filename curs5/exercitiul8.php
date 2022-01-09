<?php

$masini['auto'] = array(
    "Fiat"=>"500",
    "Alfa"=>"147",
    "Lancia"=>"Delta",
    "Ferrari"=>"Testarossa",
    "Maserati"=>"Biturbo",
);
// folosim unset pentru a elimina un element din lista noastra
unset($masini['auto']['Ferrari']);

// iar pentru a schimba valoarea unui element din lista noastra
$masini['auto']['Fiat']='500XL';

// echo "<pre>";
// var_dump($masini);
// var_export($masini);
// print_r($masini);

// Varianta 1
// foreach ($masini['auto'] as $marca => $model) {
//         echo 'Marca este: ' .$marca. ' Modelul este: ' . $model . '<br>';
//     
// }

// Varianta 2
// foreach ($masini as $masina){
//     foreach ($masina as $marca => $model) {
//         echo 'Marca este: ' .$marca. ' Modelul este: ' . $model . '<br>';
//     }
// }

// Varianta 3 cu includerea codului html
/*
Ex: 1 
-in acest exemplu daca avem si alte valori in afara de 'auto' nu le putem executa.
*/

foreach ($masini['auto'] as $marca => $model): ?>
    <p>  Marca este:     <?php echo $marca; ?> 
         Modelul este:   <?php echo $model; ?>
     </p>
 <?php endforeach;?>

<!-- 
  sau Ex: 2 din varianta 3 
-In acest exemplu putem executa mai multe valori din array daca este posibil acest lucru. 
-->
<hr>

<?php foreach ($masini as $masina) :?>
    <?php foreach ($masina as $marca => $model): ?>
    <p>  Marca este:     <?php echo $marca; ?> 
         Modelul este:   <?php echo $model; ?>
     </p>
     <?php endforeach;?>
 <?php endforeach;?>