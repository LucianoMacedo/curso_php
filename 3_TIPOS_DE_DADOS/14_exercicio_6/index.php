<?php

/* array associativo de carros */

$carros=[
    'marca'=>'BMW',
    'pneus'=>4,
    'cor'=>'rosa',
    'velocidade_maxima'=>250
];

print_r($carros);
echo '<br>';
echo $carros['marca'];
echo '<br>';
echo $carros['cor'];
