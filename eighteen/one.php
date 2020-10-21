<?php
  /**
   *
   * 文件包含有两个方法: 一个是include,一种是require方法
   * 两个方法在本质上包含是不存在问题的,但是如果关联后续还有代码执行
   * 两个用法又不相同,第一个用include,假设包含中没这个文件,后续代码也会执行
   *  两个用法又不相同,第二个用require,假设包含中没这个文件,后续代码不会继续执行
   */

/**
 * include包含方法
 */
//  include 'mysql/two.php';
//
//  select();


//   require  'mysql/two.php';
//   del();

/**
 * 假设include包含的文件中没这个php的话,看后续代码会不会执行
 */
include 'mysql/three.php';
echo '我是后续代码';
select();


//require 'mysql/three.php';
//select();
//echo '我是后续代码';
