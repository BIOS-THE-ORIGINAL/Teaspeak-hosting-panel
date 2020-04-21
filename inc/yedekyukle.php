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

$veri1 = $conn->prepare("select * from yyedek where id=?");
$veri1->execute(array($_SESSION['user_id']));
$ts33 = $veri1->fetch();



$idd = $_SESSION['user_id'];

// load framework files
require_once("baglantilar/framework/TeamSpeak3.php");
require_once("baglantilar/panelbaglan.php");
$sql_query = "Select * From yyedek WHERE id = ".$idd;
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
		$sql_query = "DELETE From yyedek WHERE id = ".$_GET['yedeks'];
		if( $conn->query($sql_query) ) {
			echo '';
			unlink($ts3array[$_GET['yedeks']]['yedekadi']);
			unset($ts3array[$_GET['yedeks']]);
		}
	}
}

?>

<?php include 'baglantilar/ust.php'; ?>
    
        
<?php 
	if(isset($_FILES['dosya'])){
	    $hata = $_FILES['dosya']['error'];
	    if($hata != 0) {
			$hatam = 'An error occurred while loading.';
	    } else {
		    $boyut = $_FILES['dosya']['size'];
		    if($boyut > (1024*1024*25)){
				$hatam = 'You can Upload Max 5MB.';
		    } else {
			    $tip = $_FILES['dosya']['type'];
			    $isim = $_FILES['dosya']['name'];
			    $sql_query = "INSERT INTO yyedek(id,yedekadi,aciklama,port) VALUES (".$_SESSION['user_id'].", 'yyedek/".$isim."', 'YEDEK (".date('d.m.Y - H:i:s').") Yuklendi', ".$user['port'].")";
			    $uzanti = explode('.', $isim);
			    $uzanti = $uzanti[count($uzanti)-1];
			    if($tip != 'application/octet-stream' || $uzanti != 'yedek') {
				$hatam = 'Must Be .Spare Extensions Only.';
			    } else {
				$dosya = $_FILES['dosya']['tmp_name'];
				copy($dosya, 'yyedek/' . $_FILES['dosya']['name']);
				$hatam = 'Your file has been sent to the server! You can install a step on the Setup Button. <META HTTP-EQUIV="Refresh" CONTENT="1;URL=index.php?sayfa=yedekyukle">';
				
				$conn->query($sql_query);
			}
		  }
	   }
	} else {
		echo '';
	}
	
	
?>

				
		
		
<br>  <div class="col-sm-12">
		
  <div class="panel panel-default">

  <div class="panel-heading">Upload Backup</div>

  <div class="panel-body">
<?php if( count($ts3array) > 0):?>
<div class="col-sm-12">
<div class="widget">
	<div class="widget-content widget-content-mini themed-background-dark text-light-op">
	<span class="pull-right text-muted"></span>
<form class="form-signin" method="POST">
	<center>Bu Bölümde Yüklediğiniz Yedekleri Görebilirsiniz!
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
	<th><?=$ts33["aciklama"]; ?></th>
             <th><a href="?sayfa=yedekyukle&yedek=<?=$ts33['id']?>" class="btn btn-xs btn-success">Install This Backup</a> <a href="?sayfa=yedekyukle&yedeks=<?=$ts33['id']?>" onclick="confirm('Are you sure you want to do this?')" class="btn btn-xs btn-danger">Delete This Backup</a> <a href="dosya/yyedekindir.php" class="btn btn-xs btn-warning">Download This Backup</a></th>
			 
  </table>
	<?php endforeach; ?>
	</tbody>
</table>
	</div>	 </div>				
<?php endforeach; ?>				
				</tbody>
				<?php else:?>
	<div class="alert alert-info"><strong>You Have Not Installed Backup Before! </i>Please install from the lower part to install a backup and your backup must be a spare extension or it will not be accepted!</strong>
<?php endif; ?> </div></div></div> </div> </form>
			</table>
			

	 

<br><div class="col-lg-12">
<div class="panel panel-info">
<div class="panel-heading"><b><center>RELAY</center></b></div>
<div class="panel-body">
<?php if (@$hatam){ echo '<br><center><div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>'.@$hatam.'</strong></div></center>';} ?>
          <form id="contact-form" enctype="multipart/form-data" class="form" action="" method="POST" role="form">                  
              <div class="form-group">
                  <label class="form-label" >Upload Backup File</label>
                  <input type="file" class="form-control" name="dosya" placeholder="Yedek Dosyası" tabindex="3">
              </div>                            
              <div class="text-center">
                  <button type="submit" onclick="return eminmisiniz();" class="btn btn-start-order">INSTALL SPARE</button>
				  <input type="hidden" class="btn btn-primary" name="Yukle" value="TSDNS Oluştur">
              </div>
          </form>

	
