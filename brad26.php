<?php
    $img = imagecreatefromjpeg('imgs/coffee.jpg');

    $yellow = imagecolorallocate($img,255,255,0);

    imagettftext($img, 64, -30,100, 320,
    $yellow,'fonts/brad2.ttf', 
    '資策會論壇專屬,歡迎盜連');



    header('content-type: image/jpeg');
    imagejpeg($img);
    
    imagejpeg($img, 'imgs/ok.jpg');

    imagedestroy($img);



?>