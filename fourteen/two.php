<?php
    /**
     * 函数里面有形参,无返回值的情况
     * 方法的函数名不区分大小写的,用function关键字定义
     * 函数调用,函数名（）;才能激活
     *
     * 函数名可以放前面使用
     * 可以被调用多次
     *
     * 形参可以先慢点定义,在函数体里面在定义
     * return 后面的函数不会在继续执行
     */
//    test();
//    test();
//    function test($name = '张三',$sex = '男'){
//        echo '你的名字为:'.$name.','.'你的性别为:'.$sex;
//        return 1;
//    }

            function test($name,$sex){
                echo '你的名字为:'.$name.','.'你的性别为:'.$sex;
                return 1;
            }



   $num = test('张三','女');
    echo $num;