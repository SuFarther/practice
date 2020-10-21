<?php
   /**
    * 获取当前文件的路径  /Applications/MAMP/htdocs/six/two.php
    */
    echo  __FILE__;

    echo '<br />';

   /*
    * 获取当前代码在第几行
    */
    echo __LINE__;

    echo '<br />';

    /**
     * 获取系统的信息
     */
    echo PHP_OS;

    echo '<br />';

    /**
     * 获取当前PHP系统的版本👌
     */
    echo PHP_VERSION;

    echo '<br />';

    /**
     * 获取当前的方法
     */
    function test(){
        echo __FUNCTION__;
    }

    echo test();

    echo '<br />';

    echo M_PI;

    echo '<br />';

    echo __CLASS__;

