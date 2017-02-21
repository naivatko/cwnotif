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
	<div id="wrapper">
		<div id="box-login">
			<form method="post" action="modules/login.php">
				<label>Username</label>
				<br/>
				<input type="text" name="username" placeholder="username cwnotif" maxlength="10">
				<br/>
				<label>Password</label>
				<br/>
				<input type="password" name="password" placeholder="********" maxlength="10">
				<br/>
				<br/>
				<input type="submit" name="submit" value="Login" class="button">
				<br>
	 		</form>
	 		<form method="" action="form_daftar.php">
	 			<input type="submit" name="submit2" value="Daftar" class="button2">
	 		</form>
		</div>
		<p>Username atau password yang anda masukkan salah atau belum terdaftar</p>
	</div>
</body>
