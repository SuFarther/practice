<?php

    function test($a,$b,$c,$d){
        var_dump($a,$b,$c,$d);
    }
    $array = [0,2,3,'3','5'];
    test(...$array);