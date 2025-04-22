<?php

class Pessoa{
    function falar(){
        echo "Olá pessoal";
    }
}

$luciano = new Pessoa();

$luciano->nome="Luciano";

echo $luciano->nome;

echo '<br>';

$luciano->falar();