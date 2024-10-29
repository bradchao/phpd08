<?php
    $mysqli = new mysqli('localhost',
    'root','', 'brad');
    $mysqli->set_charset('utf8');      

    $sql = 'SELECT * FROM gift';
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_object()){
        echo "{$row->name}<br />";
    }

?>