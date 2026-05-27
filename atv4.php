<?php

$cores = ["amarelo", "verde", "azul","vermelho"];
$seExiste = false;

foreach ($cores as $cor){
    if($cor == "azul"){
        $seExiste = true;
        break;
 } 
} 
    if ($seExiste == true){
    echo "Cor favorida encontrada";
 }
    else { 
    echo "Azul n encontrado";
}