<?php
    $start = 2; $rows = 2; $cols = 4;
    if (isset($_GET['start'])){
        $start = $_GET['start'];
        $rows = $_GET['rows'];
        $cols = $_GET['cols'];
    }

    define("ROWS", $rows);
    define("COLS", $cols);
    define("START", $start);
?>

<h1>Brad Big Company</h1>
<hr />
<form action="brad99.php">
    Start: <input type="number" name="start" value="<?php echo $start; ?>"/>
    rows: <input type="number" name="rows" value="<?php echo $rows; ?>"/>
    cols: <input type="number" name="cols" value="<?php echo $cols; ?>"/>
    <input type="submit" value="Change" />
</form>
<hr />
<table border="1" width="100%">
    <?php
        for ($k = 0; $k < ROWS; $k++) {
            echo '<tr>';
            for ($j = START; $j < START+COLS; $j++) {
                $newj = $j + $k * COLS;

                if ($k % 2 == 0){
                    if ($j % 2 == 0){
                        echo '<td bgcolor=pink>';
                    }else{
                        echo '<td bgcolor=yellow>';
                    }
                }else{
                    if ($j % 2 != 0){
                        echo '<td bgcolor=pink>';
                    }else{
                        echo '<td bgcolor=yellow>';
                    }

                }
                
                for ($i = 1; $i <= 9; $i++) {
                    $r = $newj * $i;
                    echo "$newj x $i = $r<br />";
                }
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>

</table>