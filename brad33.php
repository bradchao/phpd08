<?php
    date_default_timezone_set('Asia/Taipei');
    $fp = @opendir(".") or exit('Server Busy');
?>
<table border="1" width="100%">
    <tr>
        <th>Filename</th>
        <th>type</th>
        <th>size</th>
        <th>datetime</th>
    </tr>
    <?php
        while (($file = readdir($fp)) !== false) {
            echo '<tr>';
            echo "<td>{$file}</td>";
            if (is_dir($file)){
                echo "<td>Dir</td>";
            }else{
                echo "<td>File</td>";
            }
            echo "<td align=right>" . filesize($file). "bytes</td>";

            echo "<td>" 
            . date("Y-m-d H:i:s", filemtime($file)) 
            . "</td>";

            echo '</tr>';
        }
        closedir($fp);

    ?>
</table>

