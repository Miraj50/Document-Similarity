<?php 
session_start();

$url1 = $_SESSION['url1'];
$url2 = $_SESSION['url2'];
echo $url1 . $url2;

?>