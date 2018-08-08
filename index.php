<?php
// include_once "./vendor/autoload.php";
//$appID = "11518006";
//$apiKey = "q8GNSzp8NoxupWPTfw5eSYic";
//$secretKey = "cPmPECjXUEZAA4HBjYzk9CuBh8bYD7MP";
//$baiduSpeech = new Jormin\BaiduSpeech\BaiduSpeech($appID, $apiKey, $secretKey);
//$response = $baiduSpeech->combine('/home/vagrant/code/test/audios', "百度语音接口返回数据，字段详细见", 1);
//var_dump($response);

$apiKey = '8a5cb66f52a04542bb21697cd93425ff';
$message = $_GET['message'];
$userID = '1';
$ip = '113.143.181.239';
$location = \Jormin\IP\IP::ip2addr($ip, '');
$tuLing = new Jormin\TuLing\TuLing($apiKey);
$response = $tuLing->chat($message, $userID, $location);
var_dump($response);



phpinfo();