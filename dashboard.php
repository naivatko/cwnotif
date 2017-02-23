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
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
		<script type="text/javascript" src="javascript/jquery.min.js"></script>
	</head>
<body>
<header>
	<nav id="nav-all">
		<h1 id="welcome" class="row col-sm-6 vertical-align">Selamat Datang! <?php echo $username; ?></h1>
		<a href="modules/logout.php" id="logout" class="btn btn-default">Logout</a>
	</nav>
</header>

</body>
</html>
