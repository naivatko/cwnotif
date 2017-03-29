<?php
	$sms_db_host			= "localhost";
	$sms_db_user			= "user";
	$sms_db_password	= "user";
	$sms_db_name			= "sms";
	$sms_db_connect		= mysqli_connect($sms_db_host, $sms_db_user, $sms_db_password, $sms_db_name) or die(mysqli_error($sms_db_connect));
?>
