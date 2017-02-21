<?php
//include('modules/session.php');
session_start();
if(empty($_SESSION['username'])){
		header("location: index.php");
	}

$username 	= $_SESSION['username'];
$clan				=	$_SESSION['clan'];
$nickname		=	$_SESSION['nickname'];

if($_SESSION['svc_status'] == 0) {
							$svc_status = "OFF";
							} else {
							$svc_status = "ON";
							}

?>

<!DOCTYPE html>
<html>
	<head>
	  <title>cwnotif</title>
	  <link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div id="navigator">
		<div id="welcome"></b>Selamat Datang <?php echo $username ?></b></div>
		<a href="modules/settings.php">Settings</a>
		<a href="modules/logout.php">Log Out</a>
	</div>
	<div id="wrapper">
		<div id="main">
			<div id="nickname">Nickname: <?php echo $nickname ?></div>
			<div id="clan">Clan: <?php echo $clan ?></div>
			<div id="svc_status">Service Status: <?php echo $svc_status ?></div>
		</div>
	</div>
</body>
</html>
