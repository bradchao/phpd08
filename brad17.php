<?php
    $p0 = 0; $p = array(1 =>0, 0, 0, 0, 0, 0);
    for ($i = 0; $i < 1000000; $i++){
        $point = rand(1,6);
        if ($point >= 1 && $point <= 6){
            $p[$point]++;
        }else{
            $p0++;
        }
    }

    if ($p0 == 0){
        foreach ($p as $point => $num){
            echo "{$point}點出現{$num}次<br />";
        }
    }else{
        echo $p0;
    }
?>