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
</head>
<body>
<div class="container">
	<div class="row col-sm-3">
		<form method="post" action="modules/login.php">
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" placeholder="Username cwnotif" name="username" maxlength="10">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" placeholder="********" name="password" maxlength="10">
			</div>
			<button type="submit" class="btn btn-default btn-block" name="submit">login</button>
			<a href="form/daftar.php" class="btn btn-default btn-block" id="ke-form-daftar">Daftar</a>
		</form>
	</div>
</div>
</body>
