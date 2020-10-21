<?php
   /**
    * 空变量为空转换成整型,浮点型,字符串,布尔型
    * 整型  intval
    * 浮点型 floatval
    * 布尔型  boolval
    * 字符串  strval
    *
    */
   $null  = null;


   /**
    * 转换成整型,并查看是什么类型的变量
    * intval($null) 整型integer
    */
   echo gettype(intval($null));
   echo '<br />';
   echo gettype(floatval($null));
   echo '<br />';
   echo gettype(boolval($null));
   echo '<br />';
//   echo gettype(strval($null));
   var_dump(strval($null));