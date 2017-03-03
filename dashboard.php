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
				<div id="welcome"><b>Welcome! <?php echo $username; ?></b></div>
			</div>
			<div class="col-sm-6 col-xs-6" id="navbar-right">
				<div id="logout">
					<a href="modules/logout.php">
						<button type="button" class="btn btn-default btn-sm" id="logout-button">
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
			<div class="" style="background-color: #566481;">Nickname</div>
			<div class="box-content" id="box1-content">
				<div class="userdata" id="nickname"><b><?php echo $nickname; ?></b></div>
			</div>
		</div>
		<div class="boxes" id="box2">
			<div class="" style="background-color: #566481;">Clan</div>
			<div class="box-content" id="box2-content">
				<div class="userdata" id="clan"><b><?php echo $clan; ?></b></div>
			</div>
		</div>
	</div>
	<div class="box-group col-sm-6" id="box-group-kanan">
		<div class="boxes" id="box3">
			<div class="" style="background-color: #566481;">BOX 3</div>
			<div class="box-content" id="box3-content">
				<div class="userdata" id="box4"><b><?php ; ?></b></div>
			</div>
		</div>
		<div class="boxes" id="box4">
			<div class="" style="background-color: #566481;">Service Status</div>
			<div class="box-content" id="box4-content">
				<div id=svc-status>
					<div class="userdata" id="svc-status-off"><b>OFF</b></div>
					<div id="svc-status-switch"></div>
					<div class="userdata" id="svc-status-on"><b>ON</b></div>
			</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
