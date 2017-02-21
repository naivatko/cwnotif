<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
	require("connect.php");
	session_start();// Memulai Session
	// Menyimpan Session
	$user_check 		= $_SESSION['username'];
	// Ambil username kemudian array_fetch_assoc
	$session_sql 		= mysqli_query($db_connect, "SELECT * FROM tbl_user WHERE user_name = '$user_check'");
	$userdata 			= mysqli_fetch_assoc($session_sql);

	$session_username  	= $userdata["user_name"];
	$session_ign_id			= $userdata['ign_id'];
	$session_clan_id		= $userdata['clan_id'];
	$session_svc_status	=	$userdata['svc_status'];

	if(!isset($session_username)){
		mysqli_close($db_connect); // Menutup koneksi
		header("Location: ../index.php"); // Mengarahkan ke Home Page
	}
?>
