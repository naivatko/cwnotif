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
<header class="container-fluid">
	<div class="container" id="navbar">
		<div class="row" id="navbar-main">
			<div class="col-sm-6 col-xs-6" id="navbar-left">
				<div id="welcome"><b>Selamat Datang! <?php echo $username; ?></b></div>
			</div>
			<div class="col-sm-6 col-xs-6" id="navbar-right">
				<div id="logout">
					<a href="modules/logout.php">
						<button type="button" class="btn btn-default btn-sm">
	          	<span class="glyphicon glyphicon-log-out" style="color: #2a3242;"></span><b style="color: #2a3242;"> Log out</b>
	        	</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="container row" id="main">
	<div class="box-group col-sm-6" id="box-group-kiri">
		<div class="boxes" id="box1">
			<div>Nickname</div>
			<div id="nickname"><?php echo $nickname; ?></div>
		</div>
		<div class="boxes" id="box2">BOX 2</div>
	</div>
	<div class="box-group col-sm-6" id="box-group-kanan">
		<div class="boxes" id="box3">BOX 3</div>
		<div class="boxes" id="box4">BOX 4</div>
	</div>
</body>
</html>
