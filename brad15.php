<?php
    $person = ['name' => 'Brad', 'age' => 18, 'weight' => 80.2, 'gender' => true];
    var_dump( $person );
    echo '<hr />';
    echo $person['name'] . '<hr />';
    foreach($person as $key => $value) {
        echo "$key  : $value <br />";
    }

?>