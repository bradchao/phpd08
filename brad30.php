<?php
    $upload = $_FILES['upload'];
    //var_dump($upload);
    foreach ($upload as $key => $value) {
        echo "{$key} : {$value}<br />";
    }
    //---------------
    if ($upload['error'] == 0){
        move_uploaded_file($upload['tmp_name'], 
            "upload/{$upload['name']}");
    }

?>