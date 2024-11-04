<?php
    include("bradapis.php");
    session_start();;

    if (!isset($_SESSION["lottery"])) header("Location: brad48.php");
    
    $lottery = $_SESSION['lottery'];
    $brad = $_SESSION['std1'];

?>
Lottery: <br />
<?php 
    foreach ($lottery as $k => $v) {
        echo "$v<br />";
    }
?>
<hr />
<?php
    echo $brad->getName() . ':' . $brad->sum() .':' . $brad->avg();
?>
<hr />
<a href="brad50.php" >Logout</a>