<?php
    $x = $y = $r = '';
    if (isset($_GET['x'])){
        $x = $_GET['x']; $y = $_GET['y'];
        $r = $x + $y;    
    }
?>
<form action="brad09.php">
    <input name="x" value="<?php echo $x; ?>">
    +
    <input name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=" />
    <?php echo $r; ?>
</form>