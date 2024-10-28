<?php
    $fp = fopen("dir1/ns1hosp.csv", "r");

    fgets($fp);
    while (($line = fgets($fp)) !== false) {
        //echo $line . '<br />';
        $data = explode(",", $line);
        echo "{$data[2]} : {$data[4]}<br />";
    }


    fclose($fp);

?>