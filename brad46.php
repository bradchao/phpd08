<?php
    if (!isset($_REQUEST['account'])) header('Location: brad45.php');

    $account = $_REQUEST['account'];
    $passwd = password_hash($_REQUEST['passwd'], PASSWORD_DEFAULT);
    $name = $_REQUEST['name'];

    $icon = $_FILES['icon'];
    $iconData = file_get_contents($icon['tmp_name']);
    $iconError = $icon['error']; $iconType = $icon['type'];

    $mysqli = new mysqli('localhost',
    'root','', 'brad');
    $mysqli->set_charset('utf8');   

    $sql = 'INSERT INTO member (account,passwd,name,icon) VALUES (?,?,?,?)';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ssss', $account, $passwd,
                                            $name,$iconData);
    if ($stmt->execute()) {
        echo 'OK';
    } else {
        echo "ERROR:{$mysqli->error}";
    }


?>