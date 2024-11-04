<?php
    session_start();;
    if (!isset($_SESSION["rand"])) header("Location: brad48.php");
    
    $rand = $_SESSION['rand'];
?>
Lottery: <?php echo $rand; ?><hr />
<a href="brad50.php" >Logout</a>