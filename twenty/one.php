<?php

  /**
   * 索引数组的增删改查
   */

   $arr = [1,2,3,4,5,6];


   //查询对应数组元素的值
   echo '查询对应的元素:'.$arr[0].'<br/>';


   //删除
   unset($arr[1]);
   var_dump($arr);


   //改
   $arr[0] = 7;
   var_dump($arr);

   //增加
   $arr[6] = 8;
   var_dump($arr);