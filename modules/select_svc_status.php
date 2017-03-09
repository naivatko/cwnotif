<?php
  include("connect.php");
  session_start();

  $query = "SELECT svc_status FROM tbl_user WHERE user_name = '$username'";
  $svc_status_query       = mysqli_query($db_connect, $query);
  $svc_status             = mysqli_fetch_assoc($svc_status_query);
  $svc_status             = $svc_status['svc_status'];
  $_SESSION['svc_status'] = $svc_status;

  echo $_SESSION['svc_status'];
?>
