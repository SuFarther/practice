<?php
    /**
     *  两层循环
     *    注意: 在里层的循环先算,然后在算外层的循环
     *        当j =0; 判断条件0<3 ; j这时候为0； //初始条件走一遍
     *        当j这时候为1，去跟判断条件$j<3吗？明显是1<3;j++,这时候j就为1
     *        当j这时候为2，去跟判断条件$j<3吗？明显是2<3;j++,这时候j就为2
     *
     *     所以里层循环得出的结果为0,1,2
     *
     *      里面循环条件结束,在看外层循环,
     *
     *      当i=0时,$i <3 ,肯定呀,i的值为0
     *      当i=1时,$i <3 ,肯定呀,i的值为1
     *      当i=2时,$i <3 ,肯定呀,i的值为2
     *
     *
     */

  for($i = 0; $i < 3; $i++){
      for($j = 0; $j <3; $j++){
          echo $j.'<br/>';
      }

      echo 'i的值为：'.$i;
      echo  '<hr />';
  }