<?php
  include("connect.php");
  include("session.php");

  $svc_status         = $_POST['svc_status'];

  /*if($svc_status == '1'){
    $svc_status = 1;
  } else {
    $svc_status = 0;
  }*/

  $query = "UPDATE tbl_user
            SET svc_status = '$svc_status'
            WHERE user_name = '$username'";
  $update_svc_status = mysqli_query($db_connect, $query);

  if($update_svc_status){
    $_SESSION['svc_status'] = $svc_status;
    echo $_SESSION['svc_status'];
  }
?>
