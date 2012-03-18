<?php

$url = 'http://www.theneolinx.info/clients/capricon/include/welcome.php';

$data = array(
    'username'=>'ritesh',
    'password'=>'pass',
);

$ch = curl_init($url);
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
$response = curl_exec($ch);
curl_close($ch);

echo $response;      