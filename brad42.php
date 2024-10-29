<?php
    $account = 'tony';
    $passwd = password_hash('654321', PASSWORD_DEFAULT);
    $name = '湯尼';

    $sql = 'INSERT INTO member (account,passwd,name) VALUES (?,?,?)';

    $mysqli = new mysqli('localhost',
        'root','', 'brad');
    $mysqli->set_charset('utf8');      

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sss', $account, $passwd, $name);
    if ($stmt->execute()){
        echo 'New Member Success';
    }else{
        echo 'Failure';
    }

?>