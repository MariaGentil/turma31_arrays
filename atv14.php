 <?php

 $paises =[
    ['país' => 'Brasil',  'capital' => 'Brasília'],
    ['país' => 'França',  'capital' => 'Paris'],
    ['país' => 'Argentina','capital' => 'Bueno Aires'],
    ['país' => 'Canadá',   'capital' => 'Ottawa']
];

foreach ($paises as $c){
    if ($c['capital'][0] == 'B')
        echo $c['capital']."\n";
    }
