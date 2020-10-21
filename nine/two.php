<?php
  /**
   * 连续流程控制符
   */

  $test = 6;

  switch ($test){
      case 1:
      case 2:
      case 3:
          echo '1,2,3';
          break;
      case 5:
          echo '5';
          break;
      default:
          echo '啥也不是';
          break;
  }