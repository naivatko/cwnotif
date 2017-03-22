<?php

include_once("connect.php");
include_once("api.php");

$query          = "SELECT clan_id, clan FROM tbl_clan";
$result         = mysqli_query($db_connect, $query);

if($result){
  while($row = mysqli_fetch_assoc($result)){
    $api_clan_battles = json_decode(file_get_contents($clan_battles.$row['clan_id']),true);

    $clan   = $row['clan'];
    $jadwal = date('d/m/Y H:i', 20000000);

    echo $clan;
    echo "</br>";
    echo $jadwal;

    //if($api_clan_battles['status'] == 'ok' && !empty($api_clan_battles['data'])){


      //$query  = "INSERT IGNORE INTO tbl_jadwal (clan, jadwal)
      //           VALUES ('$clan', '$jadwal')";

      //$insert_jadwal = mysqli_query($db_connect, $query);
    //}
  }
}

?>
