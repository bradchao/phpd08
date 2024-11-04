<?php
    $mysqli = new mysqli('localhost',
    'root','', 'northwind');
    $mysqli->set_charset('utf8'); 

    $member = array(
        array(
            'id'=> 1,
            'ename' => 'brad1',
            'weight' => 80.123
        ),
        array(
            'id'=> 2,
            'ename' => 'eric2',
            'weight' => 80.123
        ),
        array(
            'id'=> 3,
            'ename' => 'amy3',
            'weight' => 80.123
        ),
    );


    header('Content-type: application/json');
    echo json_encode($member);
?>