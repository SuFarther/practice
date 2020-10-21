<?php
  /**
   * 调整为中国的时间 东八区
   */


  date_default_timezone_set('RPC'); //中国的时区
  $time = time();

  echo date('Y-m-d H:i:s',$time);