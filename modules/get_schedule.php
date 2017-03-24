<?php

include_once("connect.php");
include_once("api.php");

$query          = "SELECT clan_id, clan FROM tbl_clan";
$result         = mysqli_query($db_connect, $query);

if($result){
  while($row = mysqli_fetch_assoc($result)){
    $api_clan_battles = json_decode(file_get_contents($clan_battles.$row['clan_id']),true);

    if($api_clan_battles['status'] == 'ok' && !empty($api_clan_battles['data'])){
      $clan   = $row['clan'];
      $id     = $clan.$api_clan_battles['data'][0]['time'];
      $jadwal = date('Y-m-d H:i:s', $api_clan_battles['data'][0]['time']);
      $query  = "INSERT IGNORE INTO tbl_jadwal (id, clan, jadwal)
                 VALUES ('$id', '$clan', '$jadwal')";

      $insert_jadwal = mysqli_query($db_connect, $query);
      echo $clan." ".$jadwal;
      echo "<br>";
    }
  }
}

?>
