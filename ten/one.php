<?php
   /**
    * 流程控制下
    *
    *    if(条件){

    *   }else if(条件){

    *  }else{

    *  }
    *
    * 只要满足一个条件,后面的条件都不会执行,最终不满足都会走else判断条件区间里面
    */


   $test1 = 3;

   if($test1 < 2){
       echo '恭喜你答题错误';
   }else if($test1 >2){
       echo '恭喜你答题正确';
   }else{
       echo '好像这道题没有答案';
   }