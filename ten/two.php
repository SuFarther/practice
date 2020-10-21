<?php
  /**
   * 分数的计算
   */


  $score  = 79;



  if($score <= 60){
      echo '你不及格了';
  }else if($score <= 60){
      echo '你及格了';
  }else if($score <= 80){
      echo '你良好了';
  }else if($score <= 90){
      echo '你优秀了';
  }else{
      echo '你缺考,明天来办公室找我';
  }