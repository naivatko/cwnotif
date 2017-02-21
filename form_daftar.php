<?php
session_start();
if(isset($_SESSION['username'])){
	header("location: dashboard.php");
	}
?>

<!DOCTYPE html>
<head>
	<title>cwnotif</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="javascript/jquery.min.js"></script>
	<script type="text/javascript" src="javascript/core.js"></script>
	<script type="text/javascript" src="javascript/form.daftar.handler.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="box-daftar">
			<form method="post" action="modules/get_data.php" id="form-daftar">
				<label>Username</label>
				<br/>
				<input type="text" name="username" placeholder="username cwnotif" maxlength="10" id="username">
				<br/>
				<label>Password:</label>
				<br/>
				<input type="password" name="password" placeholder="********" maxlength="10" id="password">
				<br/>
				<label>Konfirmasi Password</label>
				<br/>
				<input type="password" name="repassword" placeholder="********" maxlength="10" id="repassword">
				<br/>
				<label>IGN</label>
				<br/>
				<input type="text" name="ign" placeholder="IGN" class="required" maxlength="24" id="ign">
				<br/>
				<br/>
				<input type="submit" name="submit" value="Daftar" id="button">
				<br/>
	 		</form>
		</div>
		<div id="to-login">
			<form method="" action="form_login.php">
				<input type="submit" name="" value="Ke Halaman Login" id="to-login-button">
			</form>
		</div>
	</div>
</body>
