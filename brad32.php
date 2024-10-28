<?php
    $upload = $_FILES['upload'];
    //var_dump($upload);

    foreach ($upload as $key => $value) {
        echo "{$key}<br />";
        foreach ($value as $k => $v) {
            echo "{$k} : {$v}<br />";
        }
        echo "<hr />";
    }

    foreach ($upload['error'] as $key => $value) {
        if ($value == UPLOAD_ERR_OK) {
            move_uploaded_file($upload['tmp_name'][$key],
                        "upload/{$upload['name'][$key]}" );
        }
    }




?>