<?php
   /**
    * 实现登录验证
    *   method提交方式get安全性得不到保证,http://localhost:8888/practice/twenty_two/one.php?username=shao2257346739&password=1111
    *
    */
   echo '<form  id="login"  method="get" target="_blank" action="three.php">';
   echo '用户名：'.'<input type="text" name="username"  placeholder="请输入4-12位的用户名"/>'.'<br/>';
   echo '密码：'.'<input type="password"  name="password" placeholder="请输入密码"/>'.'<br/>';
   echo '<input  type="submit" value="提交"/>';
   echo '</form>';

