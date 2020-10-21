<?php
   /**
    * 获取系统的常量,常量后面必须是标量
    *
    * define('常量名字','常量的值')->true为1,false为1
    * 常量
    */
    define('TEST','test');

    echo TEST;



    /**
     * 判断常量是是否被定义
     */
    defined(TEST);