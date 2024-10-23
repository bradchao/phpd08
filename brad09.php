<?php
    $x = $y = $r = '';
    if (isset($_GET['x'])){
        $x = $_GET['x']; $y = $_GET['y'];
        $op = $_GET['op'];

        switch ($op) {
            case '1':
                $r = $x + $y; break;
            case '2':
                $r = $x - $y; break;
            case '3':
                $r = $x * $y; break;
            case '4':
                $r1 =(int)($x / $y);
                $r2 = $x % $y; 
                $r = "$r1 ...... $r2"; break;
        }
    }
?>
<form action="brad09.php">
    <input name="x" value="<?php echo $x; ?>">
    <select name="op">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3" selected>x</option>
        <option value="4">/</option>
    </select>
    <input name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=" />
    <?php echo $r; ?>
</form>