<?php

 $mercadoria =[
    ['produto' => 'peito de frango', 'preço' => 23.50],
    ['produto' => 'escova de dentes', 'preço' => 4.99],
    ['produto' => 'garrafa de água', 'preço' => 4]
];

foreach ($mercadoria as $c)
    if ($c['preço'] >= 10){
    echo "o produto mais caro: " . $c['preço'];
}