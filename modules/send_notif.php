<?php

include_once("connect.php");

$query_jadwal  = "SELECT id_jadwal, clan_id, clan, jadwal
                  FROM tbl_jadwal
                  JOIN tbl_clan ON tbl_jadwal.clan_id = tbl_clan.clan_id
                  WHERE sent_status = 0
                  AND TIMESTAMPDIFF(HOUR, CURRENT_TIMESTAMP, jadwal) <= 1";
$result_jadwal = mysqli_query($db_connect, $query_jadwal);

if($result_jadwal){
  while($row_jadwal = mysqli_fetch_assoc($result_jadwal)){
    $id_jadwal = $row_jadwal['id_jadwal'];
    $clan_id   = $row_jadwal['clan_id'];
    $clan      = $row_jadwal['clan'];
    $jadwal    = $row_jadwal['jadwal'];
    $message   = "CLAN WAR [".$clan."] AT [".$jadwal"]";

    $select_user = "SELECT no_hp FROM tbl_user
                    WHERE clan_id = '$clan_id'
                    AND svc_status = 1";
    $result_select_user = mysqli_query($db_connect, $select_user);

    if($result_select_user){
      while($row_user = mysqli_fetch_assoc($result_select_user)){
        $no_hp = $row['no_hp'];
        
        $message_query  = "INSERT INTO outbox (DestinationNumber, TextDecoded)
                           VALUES ('$no_hp', '$message')";
        $insert_message = mysqli_query($db_connect, $message_query);
      }
    }

    $update_sent_status = "UPDATE tbl_jadwal
                           SET sent_status = 1
                           WHERE id_jadwal = '$id_jadwal'";
    $result_sent_status = mysqli_query($db_connect, $update_sent_status);

  }
}

?>
