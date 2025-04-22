<?php

$pessoa=[
    'Nome'=>'Luciano',
    'idade'=>29,
    'maior_de_idade'=>true,
    'peso'=>54.5
];

$idade=$pessoa['idade'];
if($idade >= 18){
    echo "acesso livre você tem $idade";
}