<?php

    function checkTWId($id){
        $isRight = false;

        /*
        if (strlen($id) == 10) {
            $c1 = substr($id,0,1);
            $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            if (strpos($letters, $c1) !== false){
                $c2 = substr($id,1,1);
                if ($c2 == '1' || $c2 == '2'){

                }
            }
        }
        A123456789
        192.168.3.4
        2024-10-25
        09:55:33
        0921-123456
        04-23265860
        */

        if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)){
            $isRight = true;
        }





        return $isRight;
    }

?>