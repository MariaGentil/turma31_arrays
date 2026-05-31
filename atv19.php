<?php

$alunos =[
    ['aluno' => 'mikael', 'disciplina' => 'fisica', 'nota' => 10],
    ['aluno' => 'carolina', 'disciplina' => 'fisica', 'nota' => 5.4],
    ['aluno' => 'aruan', 'disciplina' => 'fisica', 'nota' => 8],
    ['aluno' => 'gertrudes', 'disciplina' => 'fisica','nota' => 7.5]
];
$aprovados = 0;
$n_disciplina = "";

foreach ($alunos as $d){
    $n_disciplina = $d['disciplina'];
 if ($d['nota'] >= 8){
        $aprovados++;
    }
    }
        echo "Disciplina: " . $n_disciplina . "\n";
        echo "Alunos aprovados: " . $aprovados . "\n";