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

<?PHP
/**
  * TimeBot for TeamSpeak
  *
  * Created by HasanAtilan and BIOS
  *
  *
**/

require_once("baglantilar/framework/TeamSpeak3.php");
require_once("baglantilar/panelbaglan.php");



 $kanal2 = $ts3_VirtualServer->channelCreate(array(
  "channel_name"           => "1",
  "channel_topic"          => "",
  "channel_description"          => " ",
  "channel_flag_permanent" => TRUE,
)); 



$kanal1 = $kanal2;

$saat = date("H:i:s");
$saae = date("d.m.Y");
while(1) {
$kanalim = $ts3_VirtualServer->channelGetById($kanal1);
$kanalim["channel_name"] = "[cspacer] $saat - $saae";
sleep(0);
echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?sayfa=anasayfa">';
}


?>
