<?php

$nomes =[
    ['aluno' => 'marcos', 'média' => 8],
    ['aluno' => 'mario', 'média' => 9],
    ['aluno' => 'lua', 'média' => 4.4],
    ['aluno' => 'luisa', 'média' => 7],
    ['aluno' => 'ana', 'média' => 5]
];
foreach ($nomes as $notas)
    if ($notas['média'] >= 7){
        echo "aprovados: " . $notas['aluno'] . "\n";
    }