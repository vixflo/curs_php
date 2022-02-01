<?php


$masini =[
    ['nume'=>'Alfa Romeo','model'=>'Giulietta','pret'=>8000,'an'=>2018,'culoare'=>'rosu', 'poza'=>'img1.jpg',
    'dataadaugare'=>'2021-01-19'],
    ['nume'=>'Audi','model'=>'Q4','pret'=>7000,'an'=>2015,'culoare'=>'negru', 'poza'=>'img4.jpg',
    'dataadaugare'=>'2021-01-19'],
    ['nume'=>'Bmw','model'=>'X4','pret'=>20000,'an'=>2017,'culoare'=>'negru', 'poza'=>'img3.jpg','dataadaugare'=>'2021-01-19'],    
    ['nume'=>'Chevrolet', 'model'=>'Camaro','pret'=>10000,'an'=>2016,'culoare'=>'alb', 'poza'=>'img5.jpg','dataadaugare'=>'2021-01-19'],
    ['nume'=>'Dacia','model'=>'Duster','pret'=>5000,'an'=>2019,'culoare'=>'Maro', 'poza'=>'img2.jpg','dataadaugare'=>'2021-01-19']
];

// Stabilim lista de sortare definita de utilizator: usort
usort($masini, function($a, $b) {
    return strcasecmp ($a['nume'],  $b['nume']);
});
