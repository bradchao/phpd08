<?php
    include("bradapis.php");
    session_start();

    $nums = range(1,49);
    shuffle($nums);
    for ($i = 0; $i < 6; $i++) {
        $lottery[] = $nums[$i];
    }
    $_SESSION['lottery'] = $lottery;

    $brad = new Student('brad', 100, 90, 80);
    $_SESSION['std1'] = $brad;



    $brad->setMath(0);


    $lottery[0] = 123;
    
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
<a href="brad49.php">Next</a>