<?php
	include("api.php");

	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$ign			= $_POST['ign'];
	$no_hp		= $_POST['no_hp'];

	$api_account = json_decode(file_get_contents($account.$ign),true); //ambil data ign

	if($api_account["status"] == "ok"){

		//cek jawaban dari WG API.
		//jika status ok, lakukan proses selanjutnya.
		//jika terdapat lebih dari 1 data, maka data yang diambil adalah data pertama
		$account_id 				= $api_account["data"][0]["account_id"];
		$nickname						=	$api_account["data"][0]["nickname"];
		$api_account_detail	= json_decode(file_get_contents($account_detail.$account_id."&fields=clan_id"),true); //ambil data clan

		$clan_id 				 = $api_account_detail["data"][$account_id]["clan_id"];
		$api_clan_detail = json_decode(file_get_contents($clan_detail.$clan_id."&fields=tag"),true);
		$tag 						 = $api_clan_detail["data"][$clan_id]["tag"];

		$username			= stripslashes($username);
		$password			= stripslashes($password);
		$account_id		= stripslashes($account_id);
		$nickname			= stripslashes($nickname);
		$clan_id			= stripslashes($clan_id);
		$no_hp				= stripslashes($no_hp);
		$tag					=	stripslashes($tag);

		include_once("connect.php");

		$username			= mysqli_real_escape_string($db_connect, $username);//mencegah MySQL injection
		$password			= mysqli_real_escape_string($db_connect, $password);
		$account_id		= mysqli_real_escape_string($db_connect, $account_id);
		$nickname			= mysqli_real_escape_string($db_connect, $nickname);
		$clan_id			= mysqli_real_escape_string($db_connect, $clan_id);
		$no_hp				= mysqli_real_escape_string($db_connect, $no_hp);
		$tag					= mysqli_real_escape_string($db_connect, $tag);

		$hash					= password_hash($password, PASSWORD_DEFAULT);//hash password
		$query				= "INSERT INTO tbl_user (user_name, user_pass, no_hp, ign_id, clan_id)
										 VALUES ('$username', '$hash', '$no_hp', '$account_id', '$clan_id')";
		$insert_data	= mysqli_query($db_connect, $query);

		if(!$insert_data){ //jika insert data gagal -> ke halaman error
			session_start();
			$_SESSION['errno'] = mysqli_errno($db_connect);
			$_SESSION['error'] = mysqli_error($db_connect);
			mysqli_close($db_connect);
			header("location: ../daftar_error.php");

		} else { //jika berhasil -> cek username
			$query								= "INSERT IGNORE INTO tbl_nickname (ign_id, nickname) VALUES ('$account_id', '$nickname')";
			$insert_tbl_nickname	= mysqli_query($db_connect, $query);
			$query								= "INSERT IGNORE INTO tbl_clan (clan_id, clan) VALUES ('$clan_id', '$tag')";
			$insert_tbl_clan			= mysqli_query($db_connect, $query);
			require('login.php');
		}
	} else {
		//jika tidak ada jawaban dari server WG
		header("location: ../form_daftar.php");
	}
?>
