<?php
	session_start();
	$error = $_SESSION['error'];
	$errno = $_SESSION['errno'];
?>

<!DOCTYPE html>
<head>
	<title>cwnotif</title>
</head>
<body>
	<?php
		echo "<br>";
		echo $errno;
		echo "<br>";
		echo $error;
	?>
</body>