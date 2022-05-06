<?php
$to = "nayemishan377@gmail.com";
$from = "shadowd377@gmail.com";
$sub = "Testing purposes";
$body = "Hi, \nI'm Nayem Ishan";
$header = "From: {$from}\r\n";
echo mail($to, $sub, $body, $header);