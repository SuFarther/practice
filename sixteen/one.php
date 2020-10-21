<?php

    /**
     * 形参和返回值的类型
     *
     *  形参
     *       echo sum(3,4);  输出返回值return的结果
     * 如果我要规定的类型就很难了,假如是这样的
     *
     *  echo sum('3','4'); 这原本是字符串类型的,他们自动转换为int类型
     *  如果我要让他指定类型如何做呢,给形参加类型
     *
     *   如果我想让他最终的结果变成任意类型只需要在
     *
     *   function sum(形参1,形参2):类型{
     *
     *   }
     *
     *  string float
     */


    function sum(int $num1,int $num2):string {
        echo gettype($num1).'<br/>';
        echo gettype($num2);
        return $num1 + $num2;
    }

//   echo sum('3','4');
var_dump(sum('3','4'));