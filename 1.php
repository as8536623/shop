<?php
 
define("APPID", "wx6c2eab2c8c9c8d88");
define("APPSECRET", "959f5a463591fcc8a37cd2fd1f0b7100");
 
$token_access_url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . APPID . "&secret=" . APPSECRET;
$res = file_get_contents($token_access_url); //获取文件内容或获取网络请求的内容
//echo $res;
$result = json_decode($res, true); //接受一个 JSON 格式的字符串并且把它转换为 PHP 变量
$access_token = $result['access_token'];
echo $access_token;
 ?>