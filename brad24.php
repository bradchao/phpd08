<?php
    define('WIDTH', 400);
    define('HEIGHT', 20);

    $rate = 0;
    if (isset($_GET['rate'])) $rate = $_GET['rate'];

    $img = ImageCreate(WIDTH, HEIGHT);
    //var_dump($img);

    $yellow = imagecolorallocate($img,255,255,0);
    $red = imagecolorallocate($img,255,0,0);

    imagefill($img, 0,0,$yellow);
    imagefilledrectangle($img, 0,0,
        (int)(WIDTH*$rate/100),20, $red);

    header('content-type: image/jpeg');
    imagejpeg($img);


    imagedestroy($img);

?>