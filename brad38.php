<?php
    $url = 'https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvAgriculturalProduce.aspx';
    $json = file_get_contents($url);
    $datas = json_decode($json);
    //var_dump($datas);

    $mysqli = new mysqli('localhost',
        'root','', 'brad');
    $mysqli->set_charset('utf8');

    $mysqli->query('DELETE FROM gift');
    $mysqli->query('ALTER TABLE gift AUTO_INCREMENT = 1');


    foreach ($datas as $row) {
        $name = $row->Name;
        $feature = $row->Feature;
        $addr = $row->SalePlace;
        $tel = $row->ContactTel;
        $picurl = $row->Column1;
        $lat = $row->Latitude;
        $lng = $row->Longitude;
        $sql = "INSERT INTO gift (name,feature,addr,tel,picurl,lat,lng)" . 
            " VALUES ('$name','$feature','$addr','$tel','$picurl',$lat,$lng)";
        $mysqli->query($sql);
    }
?>