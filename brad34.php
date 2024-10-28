<?php
    $fp = fopen('dir1/file1', 'a+');
    fwrite($fp,"Hello, Amy\n");
    fclose($fp);
?>