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



// load framework files
require_once("baglantilar/framework/TeamSpeak3.php");
/* 
  CHANGE THIS LINE WITH YOUR TS3 QUERY INFOS
*/

require_once("baglantilar/panelbaglan.php");

$ts_host = '127.0.0.1';
$datayedek = $ts3_VirtualServer->snapshotCreate();
if( $datayedek != FALSE) {
	file_put_contents('yedekler/yedek_'.str_replace('.','',$ts_host).'_'.$user['port'].'_'.time().'.yedek', $datayedek);
	$sql_query = "INSERT INTO yedekler(id,yedekadi,yedekaciklama,port) VALUES (".$_SESSION['user_id'].", '".('yedekler/yedek_'.str_replace('.','',$ts_host).'_'.$user['port'].'_'.time().'.yedek')."', 'BACKUP (".date('d.m.Y - H:i:s').") ', ".$user['port'].")";
	$conn->query($sql_query);
	 echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?sayfa=yedek">';
  exit();
}

?>

