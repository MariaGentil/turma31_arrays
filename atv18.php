<?php

$estudantes =[
    ['aluno' => 'mirella', 'trabalho' => 2.6, 'prova' => 1],
    ['aluno' => 'carimbo', 'trabalho' => 3.7, 'prova' => 2.4],
    ['aluno' => 'paulie', 'trabalho' =>  1.7, 'prova' => 4.4],
    ['aluno' => 'nilson', 'trabalho' =>  3.7, 'prova' => 2],
    ['aluno' => 'abigail','trabalho' =>  5, 'prova' => 5]
];

$media = 0;

foreach($estudantes as $n) {
 $media = ($n ['trabalho'] + $n['prova']);
 if ($media >6){
    echo "Aprovado: " . $n['aluno'] . "\n";
 }
}