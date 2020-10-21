<?php

   /**
    * 循环控制break 结束本次循环
    *
    * continue 当满足这个循环就跳过,继续下一个循环
    */


//    for($i = 0; $i < 5; $i++){
//        if($i == 2){
//            break;
//        }
//        echo $i.'<br/>';
//    }



    for($i = 0; $i < 5; $i++){
        if($i == 3){
            continue;
        }

        echo $i.'<br/>';
    }