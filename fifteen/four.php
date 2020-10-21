<?php

  /**
   * 静态变量 静态变量用static来修饰,在初始化的时候只会调用一次,每次在系统的时候都会记录上一次的值下来
   */

   function say(){
      static $num = 1;
       $num++;
       echo $num.'<br/>';
   }
    say();
    say();
    say();
    say();