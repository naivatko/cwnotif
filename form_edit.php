<?php
session_start();
?>

<!DOCTYPE html>
<head>
	<title>cwnotif</title>
	<script type="text/javascript" src="javascript/jquery.js"></script>
	<script type="text/javascript" src="javascript/bootstrap.js"></script>
	<script type="text/javascript" src="javascript/jquery.validate.js"></script>
	<script type="text/javascript" src="javascript/jquery-validate.bootstrap-tooltip.js"></script>
	<script type="text/javascript" src="javascript/form.daftar.handler.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
	<div class="container">
		<div class="row" id="form-box">
			<div class="col-sm-4 col-xs-6">
				<form method="post" action="modules/edit_data.php" id="form-daftar">
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" type="text" autofocus name="username" value="<?php echo $_SESSION['username']?>" maxlength="10" id="username">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input class="form-control" type="password" name="password" value="" maxlength="10" id="password">
					</div>
					<div class="form-group">
						<label for="repassword">Konfirmasi Password</label>
						<input class="form-control" type="password" name="repassword" value="" maxlength="10" id="repassword">
					</div>
					<div class="form-group">
						<label for="ign">IGN</label>
						<input class="form-control" type="text" name="ign" value="<?php echo $_SESSION['nickname']?>" maxlength="24" id="ign">
					</div>
					<div class="form-group">
						<label for="no_hp">Nomor HP(Opsional)</label>
						<input class="form-control" type="text" name="no_hp" value="<?php echo $_SESSION['no_hp']?>" maxlength="20" id="no_hp">
					</div>
					<button type="submit" name="submit" id="button" class="btn btn-default btn-block">Simpan</button>
					<a href="dashboard.php" class="btn btn-default btn-block">Kembali ke Dashboard</a>
				</form>
			</div>
		</div>
	</div>
</body>
