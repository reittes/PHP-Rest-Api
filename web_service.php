<?php

//$url = 'http://www.samundra.com.np/clients/rest/welcome.php';

$request = $_SERVER['REQUEST_METHOD'];

if($request=="GET") {
  header('status : 405 Method not Allowed');
  print 'Method Not Allowed';
  exit;
}

$fp = fopen('log.txt','w');
fwrite($fp, serialize($_SERVER['POST']['username']));
fclose($fp);

$username = $_POST['username'];
$password = $_POST['password'];

if($username=='ritesh' && $password=='pass'){
  header('content-type:plain/text');
  print "OK";
}else {
  header('content-type:plain/text');
  print "CANCEL";
}
