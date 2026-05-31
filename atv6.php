//<?php

//$nomes= [
 //'Davi',
 //'Cauã',
 //'Maria',
 //'Amanda'
//];

//foreach ($nomes as $chaves => $valor){
   //     echo "$valor\n";
 //   }
//?>

<?php

$numeros= [
    '24',
    '33',
    '15',
    '98',
    '69',
];

foreach ($numeros as $chaves => $valor) {
    if ($valor %2 == 0){
        echo "os pares são: $valor\n";
    }
}

