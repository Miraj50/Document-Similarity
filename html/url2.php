<?php 
session_start();

$url1 = $_SESSION['url1'];
echo $url1 . "Yes! it worked!!";

?>