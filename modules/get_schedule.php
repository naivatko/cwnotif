<?php
date_default_timezone_set("Asia/Jakarta");

include_once("connect.php");
include_once("api.php");

$query          = "SELECT clan_id
                   FROM tbl_clan";
                  // WHERE clan_id <> ''";
$result         = mysqli_query($db_connect, $query);

if($result){
  while($row = mysqli_fetch_assoc($result)){
    $api_clan_battles = json_decode(file_get_contents($clan_battles.$row['clan_id']),true);

    if($api_clan_battles['status'] == 'ok' && !empty($api_clan_battles['data'])){

      $clan_id   = $row['clan_id'];
      $jadwal    = date('Y-m-d H:i:s', $api_clan_battles['data'][0]['time']);
      $id_jadwal = $clan_id."-".$api_clan_battles['data'][0]['time'];

      $query     = "INSERT IGNORE INTO tbl_jadwal (id_jadwal, clan_id, jadwal)
                    VALUES ('$id_jadwal', '$clan_id', '$jadwal')";

      $insert_jadwal = mysqli_query($db_connect, $query);
    }
  }
}
?>
