<?php
$j = json_decode(file_get_contents('php://input'),true);
// $j = file_get_contents('php://input');

// var_dump($j);
$text = $j["job"]["text"];
$methods = $j["job"]["methods"];
var_dump($methods);
return;
// file_put_contents("filename.txt", $json);

?>