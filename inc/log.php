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

<?php require_once("baglantilar/baglan3.php"); ?>		

		

<?php include 'baglantilar/ust.php'; ?>
    
        
<?php

$tsAdmin = new ts3admin($tsip, $tsquery);
		if($tsAdmin->getElement('success', $tsAdmin->connect())) {
			$tsAdmin->login($tskullanici, $tssifre);
			$tsAdmin->selectServer($tsport);
			$servers = $tsAdmin->logView(100);
		}
		
		?>
	
<br><div class="col-lg-12">

<div class="panel panel-success">

<div class="panel-heading"><b><center>TEASPEAK SERVER LOGS</center></b></div>

<div class="panel-body">
<?
			foreach($servers['data'] as $channel) {
			$oadi =  htmlspecialchars($channel["l"]);


			$test = str_replace("channel","channel",$oadi);
			$test = str_replace("client","client",$oadi);
			$test = str_replace("connected","connected",$oadi);
			$test = str_replace("disconnected","disconnected",$oadi);


		?>
<hr>
			<span class="label label-success">Information</span> <span class="label label-warning">History</span><?=print_r($test); } ?>
		
		</hr></div>
		

</div>
</div>
</div>
</div>		
			    	
		
		
	