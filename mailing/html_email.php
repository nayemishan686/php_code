<?php 
$to = "nayemishan377@gmail.com";
$from = "shadowd377@gmail.com";
$sub = "Html mail";
$body = "<pre>Hi, <br>How are you?</pre> <br>I am Nayem Ishan";
$body .= "<img src='https://images.unsplash.com/photo-1553389614-1eae86aa6c7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60' >";
$header = "MIME-Version: 1.0\r\n";
$header .= "Content-Type:text/html;charset=UTF-8\r\n";
$header .= "From: {$from}\r\n";
echo mail($to, $sub, $body, $header);