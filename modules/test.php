<?php
include_once("connect.php");
$time = "1263172000";
$jadwal = date('Y-m-d H:i:s', $time);

$clan_id = "2000000123";
$id_jadwal = $clan_id."-".$time;

$query = "INSERT INTO tbl_jadwal (id_jadwal, clan_id, jadwal)
          VALUES ('$id_jadwal', '$clan_id', '$jadwal')";
$insert = mysqli_query($db_connect, $query);
?>
