<?php 
$header = "From: shadowd377@gmail.com \r\n";
$header .= "Content-Type: text/html; charset= ISO-8859-1\r\n";

//To send error message in gmail
// error_log("This is not a valid",1,"nayemishan377@gmail.com");

//To send error message in files
$date = date("Y-m-d H:i:s");
error_log("[{$date}]This is not a valid",3,"/opt/myphplog.txt\n");