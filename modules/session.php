<?php
session_start();
if(empty($_SESSION['username'])){
		header("location: index.php");
	}

$username 	= $_SESSION['username'];
$clan				=	$_SESSION['clan'];
$nickname		=	$_SESSION['nickname'];
$svc_status = $_SESSION['svc_status'];
?>
