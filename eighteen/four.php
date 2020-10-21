<?php
    /**
     * 两个php类名中不能包含两个相同的php类名和方法名,否则就会报错
     * 用include_once和require_once方法就可以解决
     * 用法include和require的用法是一样的
     */

//    include 'mysql/two.php';
//    include 'mysql/two.php';

//    include_once 'mysql/two.php';
//    include_once 'mysql/two.php';
//    select(); //后续代码仍然可以执行
//
//     require 'mysql/two.php';
//     require 'mysql/two.php';


//      require_once  'mysql/two.php';
//      require_once 'mysql/two.php';
//      update();


      /**
       * 假设include_one和require_once包含中没有这个文件,我们看下后续代码存不存在
       */
//      include_once 'mysql/three.php';
//      echo '我是后续代码';


        require_once 'mysql/three.php';
        echo '我是后续代码';