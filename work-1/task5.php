<?php
    $bmw = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => 2015];
    $toyota = ['model' => 'supra', 'speed' => 110, 'doors' => 3, 'year' => 2000];
    $opel = ['model' => 'speedster', 'speed' => 200, 'doors' => 3, 'year' => 2001];

    $cars = ['BMW' => $bmw, 'Toyota' => $toyota, 'Opel' => $opel];

    print "CAR name<br>model speed doors year<br><br>";

    foreach($cars AS $k => $v){
        print "CAR {$k}<br>";
        print implode(" ", $v)."<br><br>";
    }
