<?php

$nomes =[
    ['nome' => 'aurora', 'genero' => 'f'],
    ['nome' => 'mathias', 'genero'=> 'm'],
    ['nome' => 'arthur', 'genero' => 'm'],
    ['nome' => 'davi',   'genero' => 'm'],
    ['nome' => 'marina', 'genero'=> 'f']
];

foreach ($nomes as $g)
    if ($g['genero'] == 'm'){
        echo $g['genero'] . "\n";
    }
    else{
        echo $g['genero'] . "\n";
    }