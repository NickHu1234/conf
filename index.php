<?php
/*
$_POST返回数组值
array (
  'app' => 'live',
  'flashver' => 'FMLE/3.0 (compatible; FMSc/1.0)',
  'swfurl' => 'rtmp://192.168.0.115/live',
  'tcurl' => 'rtmp://192.168.0.115/live',
  'pageurl' => '',
  'addr' => '192.168.0.199',
  'clientid' => '79',
  'call' => 'publish',
  'name' => 'test3',
  'type' => 'live',
  'pass' => '123456',
)
*/
$name = $_POST['name'];
#$name = 'test';
$pass = $_POST['pass'];
#$pass = '123456';

if(!('test'==$name&&'123456'==$pass)){
    echo "串码流不正确";
    // 这个是thinkphp5的返回头信息的函数
     header("HTTP/1.1 404 Not Found");  
    header("Status: 404 Not Found");  
    exit;  
 }

 echo "正常";
?>
