<?php
    $mysqli = new mysqli('localhost',
        'root','', 'brad');
    $mysqli->set_charset('utf8');    

    $id = 6;
    $tel = '123';
    $lat = 24.123456;

    $sql = 'UPDATE gift SET tel = ?, lat = ? WHERE id = ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sdi',$tel, $lat, $id);
    if ($stmt->execute()){
        echo 'UPDATE success';
    }else{
        echo 'UPDATE failure';
    }


?>