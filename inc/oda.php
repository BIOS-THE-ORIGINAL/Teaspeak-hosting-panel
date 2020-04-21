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

$nome_sala         = $_POST['oda'];



  

// create a top-level channel and get its ID
$top_cid2 = $ts3_VirtualServer->channelCreate(array(
  'channel_name'           => "[spacer]├ ▪$nome_sala @ Administration",
  'channel_topic'          => "$nome_sala",
  'channel_codec'          => TeamSpeak3::CODEC_OPUS_VOICE,
  'channel_flag_permanent' => TRUE,

  ));
 
 $top_cid3 = $ts3_VirtualServer->channelCreate(array( 
   'channel_name'           => "[spacer]├ ▪$nome_sala @ Meeting",
  'channel_topic'          => "$nome_sala",
  'channel_codec'          => TeamSpeak3::CODEC_OPUS_VOICE,
  'channel_flag_permanent' => TRUE,
));
   $top_cid4 = $ts3_VirtualServer->channelCreate(array(
  'channel_name'           => "[spacer]├ ▪$nome_sala @ Game room",
  'channel_topic'          => "$nome_sala",
  'channel_codec'          => TeamSpeak3::CODEC_OPUS_VOICE,
  'channel_flag_permanent' => TRUE,
  
  ));
 
 $top_cid5 = $ts3_VirtualServer->channelCreate(array(
  'channel_name'           => "[spacer]├ ▪$nome_sala @ Support Room",
  'channel_topic'          => "$nome_sala",
  'channel_codec'          => TeamSpeak3::CODEC_OPUS_VOICE,
  'channel_flag_permanent' => TRUE,
 ));

 $top_cid6 = $ts3_VirtualServer->channelCreate(array(
  'channel_name'           => "[spacer]├ ▪$nome_sala @ Our rules",
  'channel_topic'          => "$nome_sala",
  'channel_codec'          => TeamSpeak3::CODEC_OPUS_VOICE,
  'channel_flag_permanent' => TRUE,
));



?>

<?php echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?sayfa=odalar">'; ?>