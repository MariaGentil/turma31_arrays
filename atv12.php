|<?php

    $mercadoria =[
    ['produto' => 'desodorante', 'preço' => 14.99],
    ['produto' => 'sabão', 'preço' => 5.99],
    ['produto' => 'fósforo', 'preço' => 2.50]
];

  foreach ($mercadoria as $preços)
   if  ($preços['preço'] < 10) {
         echo $preços['preço']. ": Está barato\n";
}  else {
         echo $preços['preço'] . ": Está caro.\n";
}