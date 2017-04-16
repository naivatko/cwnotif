<?php
include("session.php");
include("api.php");

function getPercentage($value, $base){
  $percentage = round((float)$value/$base*100, 2)."%";

  return $percentage;
}

$api_account_detail	= json_decode(file_get_contents($account_detail.$ign_id),true); //ambil data

$personal_rating = $api_account_detail["data"][$ign_id]["global_rating"];
$win_count       = $api_account_detail["data"][$ign_id]["statistics"]["all"]["wins"];
$battles_count   = $api_account_detail["data"][$ign_id]["statistics"]["all"]["battles"];
$hits_count      = $api_account_detail["data"][$ign_id]["statistics"]["all"]["hits"];
$shots_count     = $api_account_detail["data"][$ign_id]["statistics"]["all"]["shots"];
$survive_count   = $api_account_detail["data"][$ign_id]["statistics"]["all"]["survived_battles"];
$damage_dealt    = $api_account_detail["data"][$ign_id]["statistics"]["all"]["damage_dealt"];
$damage_received = $api_account_detail["data"][$ign_id]["statistics"]["all"]["damage_received"];
$avg_xp          = $api_account_detail["data"][$ign_id]["statistics"]["all"]["battle_avg_xp"];


$win_ratio       = getPercentage($win_count, $battles_count);
$hit_ratio       = getPercentage($hits_count, $shots_count);
$survive_ratio   = getPercentage($survive_count, $battles_count);
$avg_damage      = round((float)$damage_dealt/$battles_count, 2);
$damage_ratio    = round((float)$damage_dealt/$damage_received, 2);
?>
