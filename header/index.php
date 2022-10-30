<?php
// header("HTTP/1.0 404 Not Found");
// header("Location: http://www.example.com/") ;
// header("HTTP/1.1 301 Moved Pemanently") ;
// header("Refresh:5; url=http://www.example.com");
ob_start();
echo "<h1>!!!</h1>";
header("Content-Type: text/html; charset=utf-8");
header("X-my-header: Hello world !") ;
ob_end_flush();