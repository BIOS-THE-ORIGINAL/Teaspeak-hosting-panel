<?php
	
session_start();
ob_start();
require 'baglantilar/database.php';

if( isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT * FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}
else
{
	header("Location: giris.php");
	die();
}

?>

<?php

if(!defined('6755682621')) {

   die('Direct access not permitted');

}

?>



<?php include 'baglantilar/ust.php'; ?>
    
        
					
<?php
		
// load framework files
require_once("baglantilar/framework/TeamSpeak3.php");

// connect to local server, authenticate and spawn an object for the virtual server on port 9987

require_once("baglantilar/panelbaglan.php");

if(isset($_POST['ban'])) {
		
		$reason = $_POST['reason'];
		$nick = $_POST['client'];
		$time = $_POST['time'];
		$ts3_VirtualServer->clientGetByName($nick)->ban($timeseconds = $time,$reason = $reason);
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?sayfa=kullanici">';
  exit();
	}	
	
?>

<?php

if(isset($_POST['kick'])) {
		
		$reason = $_POST['reason'];
		$nick = $_POST['client'];
		$time = $_POST['time'];
		$ts3_VirtualServer->clientGetByName($nick)->kick(TeamSpeak3::KICK_SERVER, $reason);
		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?sayfa=kullanici">';
  exit();
	}
	
	
	?>
				
<br><div class="panel panel-default">

  <div class="panel-heading">Ban User</div>

<div class="panel panel-default">


  <div class="panel-body">
<form class="form-signin" method="POST">
            <header>
			</header>					
					<div class="box box-warning">
						<div class="box-header with-border">
							<h3 class="box-title"></h3>
						</div>
						<div class="box-body">
						<?php if(isset($_POST['ban'])) { 
								
								$razon = $_POST['reason'];
								$nick = $_POST['client'];
								$time = $_POST['time'];
								if($time == 0){$timefinal = "Permanent";} else{$timefinal = $time;}
							?>	
							<div class="alert alert-success"><b></div>
							<meta http-equiv="refresh" content="3" >
							
							<?php }else{?>
							
							<form role="form" method="post" >

								<div class="form-group">
									<center><label>Select User</label>
									<select name="client" placeholder="100" class="form-control" style="width: 100%;
    background-clip: border-box;">
	
	<?php 
											
											foreach($ts3_VirtualServer->clientList() as $tsclient) {
												if($tsclient['client_type'] == 1) continue;
												echo"<option value=$tsclient>".$tsclient."</option>";
											}
										?>
																			</select>
								</div>
								
								<div class="form-group">
									<center><label>Reason for Banning</label></center>
									<input type="text" class="form-control" name="reason" placeholder="Reason">
								</div>
						
								<div class="box-footer">
									
									<center><label>Banning Time</label></center>
									<input type="text" class="form-control" name="time" placeholder="Time period">
									
									<br><center><input type="submit" name="ban" class="btn btn-lg btn-primary btn-block" value="Ban Him !" />
								</div>
							</form>
							
							<?php } ?>
													</div>
					</div>
					
				</div>
		</div>
		
	</div>
	
	<div class="panel panel-default">

  <div class="panel-heading">User Kick</div>

<div class="panel panel-default">


  <div class="panel-body">
<form class="form-signin" method="POST">
            <header>
			</header>					
					<div class="box box-warning">
						<div class="box-header with-border">
							<h3 class="box-title"></h3>
						</div>
						<div class="box-body">
						<?php if(isset($_POST['kick'])) { 
								
								$razon = $_POST['reason'];
								$nick = $_POST['client'];
								$time = $_POST['time'];
								if($time == 0){$timefinal = "Permanent";} else{$timefinal = $time;}
							?>	
							<div class="alert alert-success"><b></div>
							<meta http-equiv="refresh" content="3" >
							
							<?php }else{?>
							
							<form role="form" method="post" >

								<div class="form-group">
									<center><label>Select User</label>
									<select name="client" placeholder="100" class="form-control" style="width: 100%;
    background-clip: border-box;">
	
	<?php 
											
											foreach($ts3_VirtualServer->clientList() as $tsclient) {
												if($tsclient['client_type'] == 1) continue;
												echo"<option value=$tsclient>".$tsclient."</option>";
											}
										?>
																			</select>
								</div>
								
								<div class="form-group">
									<center><label>Reason for Kick</label></center>
									<input type="text" class="form-control" name="reason" placeholder="Reason">
								</div>
						
								<div class="box-footer">
									
									<center><label>Kick Time</label></center>
									<input type="text" class="form-control" name="time" placeholder="Time period">
									
									<br><center><input type="submit" name="kick" class="btn btn-lg btn-primary btn-block" value="Kick Him !" />
								</div>
							</form>
							
							<?php } ?>
													</div>
					</div>
					
				</div>
		</div>
		
	</div>


