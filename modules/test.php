<?php
include_once("connect.php");
$message = "test";
for($i = 0; $i < 10; $i++){
  $query1    = "INSERT INTO outbox (DestinationNumber, TextDecoded)
                VALUES ('08561858689', '$message.$i')";
  $send_sms1 = mysqli_query($sms_db_connect, $query1);

  //$query2    = "INSERT INTO outbox (DestinationNumber, TextDecoded)
  //              VALUES ('085643178839', '$message.$i')";
  //$send_sms2 = mysqli_query($sms_db_connect, $query2);
}

?>
