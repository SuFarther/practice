<?php

  /**
   * 掷骰子
   */


  $ramdon = mt_rand(1,7);

  echo "我是随机数$ramdon<br/><br/>";


  switch ($ramdon){
      case 1:
      case 2:
         echo '我去上学了1<br />';
         echo '我去上学了2<br />';
         break;
      case 3:
          echo '我去上学了3<br />';
          break;
      case 4:
      case 5:
      case 6:
          echo '我去上学了4<br />';
          echo '我去上学了5<br />';
          echo '我去上学了6<br />';
          break;
      default:
          echo '不上学我怎么上大学<br />';
          break;
  }