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
	 $ts3['name'] = 'Panel';
    $tsAdmin = new ts3admin($tsip, $tsquery);
		if($tsAdmin->getElement('success', $tsAdmin->connect())) {
			$tsAdmin->login($tskullanici, $tssifre);
			$tsAdmin->selectServer($tsport);
			$tsAdmin->setName($ts3['name']);
     $servers = $tsAdmin->channelList("-topic -flags -voice -limits -icon");
	 
   ?>
   
   <?
   
   if ( isset($_POST['odasil']) ){
	   
	   $kanalid = $_POST['kanalid'];
	   
   $svbilgi = $tsAdmin->channelDelete($kanalid);
   }
   ?>
   
	
<br><div class="col-lg-12">

<div class="panel panel-primary">
<div class="panel-heading"><b><center>TEASPEAK CHANNEL MANAGEMENT AREA</center></b></div>

<div class="panel-body">

  <?
     foreach($servers['data'] as $channel) {

      $cid         = $channel["cid"];
      $oda_adi      = $channel['channel_name']; 
      $oda_topic      = $channel['channel_topic']; 
      $oda_mikrofon_izni = $channel["channel_needed_talk_power"]; 
      $oda_silme_yetkisi  = $channel["channel_flag_default"];
	  
    ?>
	
			<button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">Channel</button><div class='well well-sm' style='background-color: #BBDEFB; opacity:0.6; filter:alpha(opacity=60);' ><div style='width:width: 100%; text-align: center; '><br>
				<form action='' method= 'POST'>
				<input type= 'hidden'  name='kanalid' value= '<?=$cid?>'/>
				ROOM NAME | <font size='4' color='red'><?=$oda_adi?></font> | CHANNEL ID : <font size='4' color='green'><?=$cid?></font> |
				<input type= 'submit'  class='btn btn-danger btn-sm' name= 'odasil'  value= 'Delete'/>
				</form>
				</div></div>  				<form action='' method= 'POST'>
				
				<? } ?>
				</form>
				 <? } ?>
				     
  </div>
	<form action='' method= 'POST'>
			<center>	<input type= 'submit'  class='btn btn-danger btn-sm' name= 'tumodalar'  value= 'Delete All Rooms'/><p></p>
				</form>

  </div>

  </div>
                       </div>
					   
                        </div>
                        </div>
