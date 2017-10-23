<?php 
session_start();

$url1 = $_POST['url1'];
$_SESSION['url1'] = $url1;
echo $url1;

$url2 = $_POST['url2'];
echo $url2;

header("location:url2.php");

?>