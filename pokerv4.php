<?php
    $poker = range(0,51);
    shuffle( $poker );

    $players = [[],[],[],[]];    
    foreach ($poker as $k => $v) {
        $players[$k%4][(int)($k/4)] = $v;        
    }

?>