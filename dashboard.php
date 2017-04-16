<?php
include("modules/player_data.php");
?>
<!DOCTYPE html>
<html>
<head>
 	<title>cwnotif</title>
	<script>
		var username	 = "<?php echo $username ?>";
		var nickname	 = "<?php echo $nickname ?>";
		var clan			 = "<?php echo $clan ?>";
    var no_hp      = "<?php echo $no_hp ?>";
		var svc_status = "<?php echo $svc_status ?>";
	</script>
	<script type="text/javascript" src="javascript/jquery.js"></script>
	<script type="text/javascript" src="javascript/bootstrap.js"></script>
  <script type="text/javascript" src="javascript/dashboard.handler.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/dashboard.css"/>
</head>
<body>
<header class="">
  <div class="container" style="height:100%;">
    <div id="navbar" class="row">
      <div id="navbar-left" class="col-sm-6 col-xs-6">
        <div id="welcome">Welcome <?php echo $username?></div>
      </div>
      <div id="navbar-right" class="col-sm-6 col-xs-6 dropdown">
        <div id="menu-icon" type="button" class="btn dropdown-toggle" data-toggle="dropdown">
          <div class="stripes" id="strip-top"></div>
          <div class="stripes" id="strip-mid"></div>
          <div class="stripes" id="strip-bottom"></div>
        </div>
        <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu-icon" id="menu-list">
          <li role="presentation">
            <a role="menuitem" tabindex="-1" href="form_edit.php">
              Edit No HP
            </a>
          </li>
          <li role="presentation">
            <a role="menuitem" tabindex="-1" href="modules/logout.php">
              Logout <span class="glyphicon">&#xe163;</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<div class="container row" id="main">
	<div class="box-group col-sm-6" id="box-group-kiri">
		<div class="boxes" id="box1">
			<div class="box-head">Nickname</div>
			<div class="box-content" id="box1-content">
				<div class="userdata" id="nickname"><b><?php echo $nickname; ?></b></div>
			</div>
		</div>
		<div class="boxes" id="box2">
			<div class="box-head">Clan</div>
			<div class="box-content" id="box2-content">
				<div class="userdata" id="clan"><b><?php echo $clan; ?></b></div>
			</div>
		</div>
	</div>
	<div class="box-group col-sm-6" id="box-group-kanan">
		<div class="boxes" id="box3">
			<div class="box-head">Statistics</div>
			<div class="box-content" id="box3-content">
        <div id="player-stat" class="row">
          <div class="col-sm-6" id="player-stat-left">
            Battles Count: <b><?php echo $battles_count."<br>";?></b>
            Win Ratio: <b><?php echo $win_ratio."<br>";?></b>
            Hit Ratio: <b><?php echo $hit_ratio."<br>";?></b>
            Survive Ratio: <b><?php echo $survive_ratio;?></b>
          </div>
          <div class="col-sm-6" id="player-stat-right">
            Personal Rating: <b><?php echo $personal_rating."<br>";?></b>
            Average Exp: <b><?php echo $avg_xp."<br>";?></b>
            Average Damage: <b><?php echo $avg_damage."<br>";?></b>
            Damage Dealt/Received: <?php echo $damage_ratio;?>
          </div>
        </div>
			</div>
		</div>
		<div class="boxes" id="box4">
			<div class="box-head">Service Status</div>
			<div class="box-content" id="box4-content">
				<div class="userdata" id="svc_status">
					<div id="switch-button">
						<!-- Rounded switch -->
						<label id="toggle-button" class="switch">
							<div id="svc-status-off" class=""><b>OFF</b></div>
							<div id="svc-status-on" class=""><b>ON</b></div>
						  <input type="checkbox" id="svc-check">
						  <div id='lingkaran' class="slider round"></div>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
