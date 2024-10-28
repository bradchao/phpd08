<?php
    $account = $_GET['account'];
    $passwd = $_GET['passwd'];
    $gender = $_GET['gender'];
    $interests = $_GET['interests'];

    echo "$account : $passwd <br />";
    foreach ($interests as $key => $value) {
        echo "$value <br />";
    }
?>