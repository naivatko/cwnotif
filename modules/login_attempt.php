<?php
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
			header("location: ../login_error.php");
	} else {
    require('login.php');
  }
}
?>
