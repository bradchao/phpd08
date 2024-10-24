<?php
    $poker = range(0,51);
    shuffle( $poker );

    $players = [[],[],[],[]];    
    foreach ($poker as $k => $v) {
        $players[$k%4][(int)($k/4)] = $v;        
    }
?>
&spades; &hearts; &diams; &clubs;
<table border="1" width="100%">
    <?php
        $suits = ['&spades;', '<font color=red>&hearts;</font>', 
                '<font color=red>&diams;</font>', '&clubs;'];
        $values = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
        foreach ($players as $i => $player) {
            sort($player);
            echo '<tr>';
            foreach ($player as $k => $card) {
                $suit = $suits[(int)($card/13)];
                $value = $values[$card % 13];
                echo "<td>{$suit}{$value}</td>";
            }
            echo '</tr>';
        }
    ?>
</table>
