<?php
include_once("connect.php");

$reset_query = "DELETE FROM tbl_jadwal";
$reset       = mysqli_query($db_connect, $reset_query);
?>
