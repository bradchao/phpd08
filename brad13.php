<?php
    $i = 0;
    for ( printBrad() ; $i < 10; printLine()) {
        echo "$i";
        $i++;
    }

    function printBrad(){
        echo 'Brad<hr />';
    }
    function printLine(){
        echo '<hr />';
    }


?>