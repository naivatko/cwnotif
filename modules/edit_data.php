<?php
include("session.php");
include("connect.php");

$new_no_hp  = $_POST['no_hp'];
$new_no_hp  = stripslashes($new_no_hp);
$new_no_hp  = mysqli_real_escape_string($db_connect, $new_no_hp);

$query      = "UPDATE tbl_user
               SET no_hp = '$new_no_hp'
               WHERE user_name = '$username'";

$edit_no_hp = mysqli_query($db_connect, $query);

if($edit_no_hp){
  $_SESSION['no_hp'] = $new_no_hp;
  header("location: ../dashboard.php");
} else {
  header("location: ../form_edit.php");
}

?>
