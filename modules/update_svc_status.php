<?php
  include("connect.php");
  include("session.php");

  $svc_status         = $_POST['svc_status'];
  $update_svc_status  = mysqli_query($db_connect, "UPDATE tbl_user
                                                   SET svc_status  = '$svc_status'
                                                   WHERE user_name = $username");

  if($update_svc_status){
    $_SESSION['svc_status'] = $svc_status;
    echo $svc_status;
  } else {
    $svc_status = $_SESSION['svc_status'];
    echo $svc_status;
  }
?>
