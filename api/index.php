<?php

$url = "http://www.51buycar.com/index.php?" . http_build_query($_REQUEST);


error_log($url, 3, "C:/_debug.txt");

// 创建一个新cURL资源
$ch = curl_init();

// 设置URL和相应的选项
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1) ;

// 抓取URL并把它传递给浏览器
$res = curl_exec($ch);

// 关闭cURL资源，并且释放系统资源
curl_close($ch);

header('Content-type: application/json'); 
exit($res);