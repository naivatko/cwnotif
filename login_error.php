<?php
	session_start();
	if(isset($_SESSION['username'])){
		header("location: dashboard.php");
	}
?>

<!DOCTYPE html>
<head>
	<title>cwnotif</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<script type="text/javascript" src="javascript/jquery.js"></script>
	<script type="text/javascript" src="javascript/bootstrap.js"></script>
	<script type="text/javascript" src="javascript/jquery.validate.js"></script>
	<script type="text/javascript" src="javascript/jquery-validate.bootstrap-tooltip.js"></script>
	<script type="text/javascript" src="javascript/form.login.handler.js"></script>
</head>
<body>
<div class="container">
	<div class="row col-sm-3" id="form-box">
		<form method="post" action="modules/login.php" id="form-login">
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" placeholder="Username cwnotif" name="username" maxlength="10">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" placeholder="********" name="password" maxlength="10">
			</div>
			<button type="submit" class="btn btn-default btn-block" name="submit">Login</button>
			<a href="form_daftar.php" class="btn btn-default btn-block" id="ke-form-daftar">Daftar</a>
		</form>
		<p class="error text-center" id="error-message">username atau password yang anda masukkan salah atau belum terdaftar<p>
	</div>
</div>
</body>
