<?php

$nomes =[
    ['nome' => 'alana', 'idades' => 18],
    ['nome' => 'amanda', 'idades' => 1],
    ['nome' => 'lucas', 'idades' => 11],
    ['nome' => 'luiz', 'idades' => 22],
    ['nome' => 'ana', 'idades' => 19]
];

foreach ($nomes as $pessoa)
    if ($pessoa ['idade'] >= 18){
        echo $pessoa['nome'] ."\n";
    }
