<?php

$notas = [
  "5.25",
  "6.30",
  "8.99"
];

foreach ($notas as $chaves) {
    if  ($notas >= 8.99){
        echo  $notas[2]. "\n";
    } else{
        echo "Not found";
}
 }
