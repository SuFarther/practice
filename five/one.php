<?php
    /**
     * 数据转换类型
     *    通过gettype获取数据的类型
     */
    $a = 123;
    $b = 123.4;
    $c = "123.b";
    $d = false;


    echo  gettype($a);  //integer类型
    echo '<br />';
    echo  gettype($b); //double类型
    echo  '<br />';
    echo  gettype($c); //string类型
    echo  '<br />';
    echo gettype($d); //boolean类型
