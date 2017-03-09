<?php
include("modules/session.php")
?>
<!DOCTYPE html>
<html>
<head>
 	<title>cwnotif</title>
	<script>
		var username	 = <?php echo $username; ?>
		var nickname	 = <?php echo $nickname; ?>
		var clan			 = <?php echo $clan; ?>
		var svc_status = <?php echo $svc_status; ?>
	</script>
	<script type="text/javascript" src="javascript/jquery.js"></script>
	<script type="text/javascript" src="javascript/bootstrap.js"></script>
  <script type="text/javascript" src="javascript/dashboard.handler.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
 <link rel="stylesheet" type="text/css" href="css/dashboard.css"/>
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
			<div class="box-head">Nickname</div>
			<div class="box-content" id="box1-content">
				<div class="userdata" id="nickname"><b><?php echo $nickname; ?></b></div>
			</div>
		</div>
		<div class="boxes" id="box2">
			<div class="box-head">Clan</div>
			<div class="box-content" id="box2-content">
				<div class="userdata" id="clan"><b><?php echo $clan; ?></b></div>
			</div>
		</div>
	</div>
	<div class="box-group col-sm-6" id="box-group-kanan">
		<div class="boxes" id="box3">
			<div class="box-head">BOX 3</div>
			<div class="box-content" id="box3-content">
				<div class="userdata" id=""><b><?php ; ?></b></div>
			</div>
		</div>
		<div class="boxes" id="box4">
			<div class="box-head">Service Status</div>
			<div class="box-content" id="box4-content">
				<div class="userdata" id="svc_status">
					<div id="switch-button">
						<!-- Rounded switch -->
						<label id="toggle-button" class="switch">
							<div id="svc-status-off" class=""><b>OFF</b></div>
							<div id="svc-status-on" class=""><b>ON</b></div>
						  <input type="checkbox" id="svc-check">
						  <div class="slider round"></div>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
