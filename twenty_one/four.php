<?php
  $arr = ['a','b','c','d','e'];

  while (list($key,$value) =  each($arr)){
      echo $key.'...'.$value.'<br/>';
  }