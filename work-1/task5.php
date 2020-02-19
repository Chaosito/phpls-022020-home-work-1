<?php
    $bmw = array('model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => 2015);
    $toyota = array('model' => 'supra', 'speed' => 110, 'doors' => 3, 'year' => 2000);
    $opel = array('model' => 'speedster', 'speed' => 200, 'doors' => 3, 'year' => 2001);
    
    $cars = array('BMW' => $bmw, 'Toyota' => $toyota, 'Opel' => $opel);
    
    print "CAR name<br>model speed doors year<br><br>";
    
    foreach($cars AS $k => $v){
        print "CAR {$k}<br>";
        print implode(" ", $v)."<br><br>";
    }
