<?php

$salario= [
    '100',
    '720',
    '250'
];

foreach ($salario as $c => $v) {
$salario[$c]= $v +100;
}

var_dump($salario);