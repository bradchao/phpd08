<?php
    session_start();

    $rand = rand(1,49);
    $_SESSION['rand'] = $rand;
?>
Lottery: <?php echo $rand; ?><hr />
<a href="brad49.php">Next</a>