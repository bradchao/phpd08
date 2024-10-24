<?php
    function sayYa(){
        echo 'Ya';
    }
    sayYa();sayYa();sayYa();
    echo '<hr />';

    function sayHello($name = 'World'){
        echo "Hello, $name<br />";
    }

    sayHello('Brad');
    sayHello('Andy');
    sayHello();
    
    echo sum(1,2,3,4,5,6,7,8,9,10);

    function sum(){
        $ary = func_get_args();
        $vv = 0;
        foreach($ary as $v){
            $vv += $v;
        }

        return $vv;
    }

?>
<hr />
