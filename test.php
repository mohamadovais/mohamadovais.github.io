<?php
$ip = $_SERVER['HTTP_CLIENT_IP'];
$res = file_get_contents("https://www.iplocate.io/api/lookup/$ip");
$res = json_decode($res);

echo $res->country; // United States
echo $res->continent; // North America
echo $res->latitude; // 37.751
echo $res->longitude; // -97.822

var_dump($res);
?>