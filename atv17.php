<?php

$pessoas =[
    ['nome' => 'davi', 'idade' => 22],
    ['nome' => 'joão', 'idade' => 25],
    ['nome' => 'thiago', 'idade' => 18],
    ['nome' => 'maria', 'idade' => 24],
    ['nome' => 'beatriz', 'idade' => 19],
    ['nome' => 'sophia', 'idade' => 30]
];

foreach ($pessoas as $i)
    if ($i['idade']  > 21){
        echo $i['nome'] . ": " . $i['idade'] . "\n";
    }