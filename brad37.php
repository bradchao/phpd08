<?php
    $mysqli = new mysqli('localhost', 
        'root','','brad');
    $mysqli->set_charset('utf8');
    $sql = 'INSERT INTO cust (cname,tel,birthday)' . 
            ' VALUES ("brad","123","1999-01-02")';
    $mysqli->query($sql);


?>