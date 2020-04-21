<?php

session_start();

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


	
	 <?
	require_once("baglantilar/baglan3.php"); 
	 
    $ayarlar = array(
        'virtualserver_hostmessage' => 'The Server Has Been In Maintenance Mode Thank You.',
		'virtualserver_hostmessage_mode' => 3);
		$tsAdmin = new ts3admin($tsip, $tsquery);

		if($tsAdmin->getElement('success', $tsAdmin->connect())) {
			
			$tsAdmin->login($tskullanici, $tssifre);
			
			$tsAdmin->selectServer($tsport);
			$ts3['name'] = 'Panel';
	        $tsAdmin->setName($ts3['name']);
			$sonuc = $tsAdmin->serverIdGetByPort($tsport);
			$sid = $sonuc['data']['server_id'];
			$sonuc = $tsAdmin->serverEdit($ayarlar);
			if($sonuc['success']!==false)
				$suc= "Server settings have been changed.";
			else $err= "Something went wrong.";
		
}
	 
   ?>
   
  <?php echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?sayfa=anasayfa">'; ?>
