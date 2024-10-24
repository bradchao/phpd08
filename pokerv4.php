<?php
    $poker = range(0,51);
    shuffle( $poker );
    
    foreach ($poker as $k => $v) {
        echo "$k : $v<br />";
    }    
?>