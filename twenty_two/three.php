<?php

/**
 * 实现简单的登录
 */
  $username = $_GET['username'];
  $password = $_GET['password'];


  $user = '张三';
  $pass = '123';

  if($username == $user && $password == $pass){
      echo '登录成功';
  }else{
      echo '登录失败';
  }

