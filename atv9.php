<?php

$preço= [
     '10',
     '20',
     '35'
];

$total = 0;
foreach ($preço as $v) {
    $total += $v;
    
}
var_dump($total);