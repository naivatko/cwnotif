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
		<script type="text/javascript" src="javascript/jquery.min.js"></script>
		<script type="text/javascript" src="javascript/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
	</head>
<body>
<header class="row">
	<div class="container" id="main-header-div">
		<div id="welcome" class="row col-sm-4">
			<h5><b>
				Selamat Datang! <?php echo $username ?>
			</b></h5>
		</div>
		<div class="" id="logout">
			<a href="modules/logout.php" class="btn btn-default" id="logout-link">
		  	<span class="glyphicon glyphicon-log-out"></span> Log out
			</a>
		</div>
	</div>
</header>
</body>
</html>
