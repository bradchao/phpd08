<?php
    include ("bradapis.php");

    if (checkTWId('A123456789')){
        echo 'OK';
    }else{
        echo 'XX';
    }
    echo '<hr />';
    echo createTWIdByRandom() . '<br />';
    echo createTWIdByGender(false) . '<br />';
    echo createTWIdByArea('B') . '<br />';
    echo createTWIdByBoth(tr'C', ue) . '<br />';

?>