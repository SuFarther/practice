<?php
   /**
    * 循环遍历 foreach
    */

   $arr = ['a' => 'aaa','b' => 'bbb','c' => 'ccc'];

   foreach ($arr  as $key =>  $value){
//       echo $arr[$key].'<br/>';
       echo  $key.'......'.$value.'<br/>';
   }