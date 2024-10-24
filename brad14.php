<?php
    $a1 = array(1,2,3,4,5,6);
    $a2 = [1,2,101 => 3,4,5,6,7];
    //echo gettype($a2);
    $a3 = '資策會';
    var_dump($a3);
    echo '<hr />';
    echo $a1[0] . '<br />';
    echo $a1[5] . '<br />';
    $a1[] = 'ok';
    var_dump($a1);
    echo '<hr />';
    echo count($a1);
    echo '<hr />';
    // echo $a2[2] . '<br />';
    var_dump($a2);
    echo '<hr />';
    for ($i = 0; $i < count($a1); $i++) {
        echo $a1[$i] . '<br />';
    }

?>