<?php
    $poker = [];
    for ($i = 0; $i < 52; $i++) {
        $temp = rand(0,51);

        // 檢查機制
        $isRepeat = false;
        for ($j = 0; $j < $i; $j++) {
            if ($temp == $poker[$j]){
                $isRepeat = true;
                break;
            }
        }
        if (!$isRepeat){
            $poker[] = $temp;
        }else{
            $i--;
        }
        
    }

    foreach ($poker as $k => $v) {
        echo "$k : $v<br />";
    }

?>