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

<?php

$veri1 = $conn->prepare("select * from yedekler where id=?");
$veri1->execute(array($_SESSION['user_id']));
$ts33 = $veri1->fetch();



$idd = $_SESSION['user_id'];

// load framework files
require_once("baglantilar/framework/TeamSpeak3.php");
require_once("baglantilar/panelbaglan.php");
$sql_query = "Select * From yedekler WHERE id = ".$idd;
$ts3array = array();
	$sql_query = $conn->query($sql_query);
	if( $sql_query->rowCount() > 0 ) {
		while($fetch = $sql_query->fetch(PDO::FETCH_ASSOC)) {
        	$ts3array[$fetch['id']] = $fetch;
        }
    }


if( isset($_GET['yedek']) ) {
	if( isset($ts3array[$_GET['yedek']]) ) {
		$data = file_get_contents($ts3array[$_GET['yedek']]['yedekadi']);

		if($data != '') {
			$sonuc = $ts3_VirtualServer->snapshotDeploy($data);
			$msg = 'Your backup was successfully established.';
		}
	}
} elseif( isset($_GET['yedeks']) ) {
	if( isset($ts3array[$_GET['yedeks']]) ) {
		$sql_query = "DELETE From yedekler WHERE id = ".$_GET['yedeks'];
		if( $conn->query($sql_query) ) {
			echo '';
			unlink($ts3array[$_GET['yedeks']]['yedekadi']);
			unset($ts3array[$_GET['yedeks']]);
		}
	}
}

?>

<?php include 'baglantilar/ust.php'; ?>
    
        
					
		
		
<br>  <div class="col-sm-12">
		
  <div class="panel panel-default">

  <div class="panel-heading">My Backups</div>

  <div class="panel-body">
<?php if( count($ts3array) > 0):?>
<div class="col-sm-12">
<div class="widget">
	<div class="widget-content widget-content-mini themed-background-dark text-light-op">
	<span class="pull-right text-muted"></span>
<form class="form-signin" method="POST">
	<center>You can see the backups you created in this section!
	</div>
	 <?php if (@$msg){ echo '<br><center><div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>'.@$msg.'</strong></div></center>';} ?>
	<div style="position: relative; width: auto" class="slimScrollDiv">
		<div id="stats">
			<table class="table table-striped">
			<?php foreach($ts3array as $ts33): ?>
				<table class="table table-hover table-striped">
	<tbody>
	<?php foreach($ts3array as $ts33): ?>
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>Backup Date and Backup Time</th>
        <th>Install Or Delete</th>

<tr>
	<th><?=$ts33["yedekaciklama"]; ?></th>
             <th><a href="?sayfa=yedek&yedek=<?=$ts33['id']?>" class="btn btn-xs btn-success">Install This Backup</a> <a href="?sayfa=yedek&yedeks=<?=$ts33['id']?>" onclick="confirm('Are you sure you want to do this?')" class="btn btn-xs btn-danger">Delete This Backup</a> <a href="dosya/yedekindir.php" class="btn btn-xs btn-warning">Download This Backup</a></th>
			 
  </table>
	<?php endforeach; ?>
	</tbody>
</table>
	</div>	 </div>				
<?php endforeach; ?>				
				</tbody>
				<?php else:?>
	<div class="alert alert-info"><strong>YOU HAVE NO BACKUP! <a href="?sayfa=yedekal" style="color: red;"></i>Click For an Backup!</strong>
<?php endif; ?> </a></form>
			</table>
			
</div></div></div> </div> 
	 
	 <div class="col-sm-12">
  <div class="panel panel-default">

  <div class="panel-heading">Upload Your Own Backup</div>

  <div class="panel-body">

          <div class="alert alert-info"><strong>If You Want To Install Your Own Backup! <a href="?sayfa=yedekyukle" style="color: red;"></i>Click!</strong>
</a>
              </div>
          </form>


</div>
</div>
</div>
  </div>


