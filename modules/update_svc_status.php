<?php
  include("session.php");
  include("connect.php");
  $select_svc_status  = mysqli_query($db_connect, "UPDATE tbl_user SET svc_status = '$session_svc_status' WHERE user_name = $session_username");
  $session_svc_status = $select_svc_status['svc_status'];
?>
