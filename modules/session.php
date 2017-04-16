<?php
session_start();
if(empty($_SESSION['username'])){
		header("location: index.php");
	}

$username 	= $_SESSION['username'];
$clan				=	$_SESSION['clan'];
$ign_id			= $_SESSION['ign_id'];
$nickname		=	$_SESSION['nickname'];
$no_hp			= $_SESSION['no_hp'];
$svc_status = $_SESSION['svc_status'];
?>
