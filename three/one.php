<?php
     $name = '张三';
     $age  = '18';
     $sex = '女';



//      echo '$name';   单引号不能转换变量
//      echo "$name";   双引号可以转换变量
//      echo '\n';  单引号不可以被解析,给个变量看下面的效果
//      echo "\n";   双引好可以解析转义字符
//      echo $name;
//      echo '\\';
//      echo '\'';
//      echo $name.'李四';  变量字符串加引号字符串相连中间用.拼接
//      $test = '好好学习';
//      echo $test;

//        echo "{$name}好好学习"; //变量和字符串使用用双引号


        echo "{$name},好好学习";
        echo '<br />';
        echo "{$name} 好好学习";