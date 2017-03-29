<?php

include_once("connect.php");
//include_once("connect_sms.php");

$query_jadwal  = "SELECT *
                  FROM tbl_jadwal
                  WHERE sent_status = 0
                  AND TIMESTAMPDIFF(HOUR, CURRENT_TIMESTAMP, jadwal) <= 1";
$result_jadwal = mysqli_query($db_connect, $query_jadwal);

if($result_jadwal){
  while($row = mysqli_fetch_assoc($result_jadwal)){
    $id_jadwal = $row['id_jadwal'];
    $jadwal    = $row['jadwal'];

    $update_sent_status = "UPDATE tbl_jadwal
                           SET sent_status = 1
                           WHERE id_jadwal = '$id_jadwal'";
    $result_sent_status = mysqli_query($db_connect, $update_sent_status);

    echo date($jadwal);
    echo "</br>";
  }
}

?>
