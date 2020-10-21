<?php
  $sum1 = 18;
  $sum2 = '18';


    /**
     *  比较运算符  ==  ($sum1 == $sum2则为真,$sum1 == $sum3则为假)
     *  逻辑运算符
     *     && || !
     */
  if(($sum1 >= $sum2) && true){
      echo '真区间';
  }else{
      echo '假区间';
  }