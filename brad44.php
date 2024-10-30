<?php
    $mysqli = new mysqli('localhost',
    'root','', 'brad');
    $mysqli->set_charset('utf8');   

    $sql = 'SELECT id,name,feature,addr,tel,picurl FROM gift';
    $stmt = $mysqli->prepare($sql);
    if ($stmt->execute()){
        $stmt->store_result();
        $stmt->bind_result($id,$name,$feature,$addr,$tel,$picurl);

?>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Feature</th>
        <th>Address</th>
        <th>Tel</th>
        <th>Picture</th>
    </tr>
    <?php
        while($stmt->fetch()){
            echo '<tr>';
            echo "<td>{$id}</td>";
            echo "<td>{$name}</td>";
            echo "<td>{$feature}</td>";
            echo "<td>{$addr}</td>";
            echo "<td>{$tel}</td>";
            echo "<td><img src='{$picurl}' width='160px' height='90px'></td>";
            echo '</tr>';
        }
    ?>
</table>
<?php
    }else{
        echo 'Ooop!';
    }
?>