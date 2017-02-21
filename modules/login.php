<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error

if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
			header("location: ../login_error.php");
	} else {
		// Variabel username dan password
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Membangun koneksi ke database
		require("connect.php");
		echo "halo";
		// Mencegah MySQL injection
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($db_connect, $username);
		$password = mysqli_real_escape_string($db_connect, $password);

		// SQL query untuk memeriksa apakah user terdapat di database?

		$query = mysqli_query($db_connect, "SELECT user_name, user_pass, nickname, clan, svc_status
																				FROM tbl_user
																				JOIN tbl_nickname ON tbl_user.ign_id = tbl_nickname.ign_id
																				JOIN tbl_clan ON tbl_user.clan_id = tbl_clan.clan_id
																				WHERE user_name = '$username'");

		if (!$query) {
			mysqli_close($db_connect);
			header("location: ../login_error.php");
		} else {
			$userdata 	= mysqli_fetch_assoc($query);
			$hash 			= $userdata["user_pass"];

			if(password_verify($password, $hash)){


				$_SESSION['username'] 	= $userdata['user_name'];
				$_SESSION['nickname']		= $userdata['nickname'];
				$_SESSION['clan']				= $userdata['clan'];
				$_SESSION['no_hp']			=	$userdata['no_hp'];
				$_SESSION['svc_status']	=	$userdata['svc_status'];;

				mysqli_close($db_connect);
				header("location: ../dashboard.php");
			} else {
				mysqli_close($db_connect);
				header("location: ../login_error.php");
			}
		}
	}
}
?>
