<?php

    $passwd = '123456';
    $hashPasswd = password_hash($passwd, PASSWORD_DEFAULT);
    //echo $hashPasswd;
    $hashPasswd = '$2y$10$7KnN4/Dz1xdMVCYdCM2Wvets6P78GKOtmgKEZ.vd42uFOUxMJaAYO';

    if (password_verify('123456', $hashPasswd)){
        echo 'OK';
    }else{
        echo 'XX';
    }


?>