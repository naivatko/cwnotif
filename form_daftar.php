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
	<div class="container">
		<div class="row col-sm-3">
			<form method="post" action="modules/get_data.php" id="form-daftar">
				<div class="form-group">
					<label for="username">Username</label>
					<input class="form-control" type="text" name="username" placeholder="username cwnotif" maxlength="10" id="username">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input class="form-control" type="password" name="password" placeholder="********" maxlength="10" id="password">
				</div>
				<div class="form-group">
					<label for="repassword">Konfirmasi Password</label>
					<input class="form-control" type="password" name="repassword" placeholder="********" maxlength="10" id="repassword">
				</div>
				<div class="form-group">
					<label for="ign">IGN</label>
					<input class="form-control" type="text" name="ign" placeholder="IGN" class="required" maxlength="24" id="ign">
				</div>
				<button type="submit" name="submit" id="button" class="btn btn-default btn-block">Daftar</button>
				<a href="form_login.php" class="btn btn-default btn-block">Ke Halaman Login</a>
			</form>
		</div>
	</div>
</body>
