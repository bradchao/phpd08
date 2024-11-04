<?php
    include("bradapis.php");
    session_start();

    if (!isset($_SESSION["member"])) header('Location: brad47.php');
    $member = $_SESSION["member"];
    //echo $member->getIcon();
?>
<h1>Brad Big Company</h1>
<hr />
Main Page
<hr />
Welcome, <?php echo $member->getName(); ?><br />
<img src='data:image/png; base64,
    <?php echo base64_encode($member->getIcon()); ?>' />

<hr />
<a href="logout.php">Logout</a>