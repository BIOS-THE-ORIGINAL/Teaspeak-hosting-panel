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
    
        
<?
	require_once("baglantilar/baglan3.php"); 
	 
    $tsAdmin = new ts3admin($tsip, $tsquery);
		if($tsAdmin->getElement('success', $tsAdmin->connect())) {
			$tsAdmin->login($tskullanici, $tssifre);
			$tsAdmin->selectServer($tsport);
     
	 $svbilgi = $tsAdmin->serverInfo();
		foreach ($svbilgi as $key) {
			$tsid   = $key["virtualserver_id"];

		
		}
		}
	 
   	
		
		?>
			  
		  
		
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Standard Channels</h4>
      </div>
      <div class="modal-body">
	  
	  
	  
<form action="?sayfa=oda" method="post" >

  <label for="usr">Clan / Guildname:</label>
  <input type="text" name="oda" class="form-control" >
</div>
<input type="submit" class="btn btn-success btn-block" value="GET MORE STANDARD CHANNELS" name="odac">
</form>		
      </div>
      </div>
      </div>
    </div>

  </div>

		
	<br><br><div class="col-lg-6">
<div class="panel panel-success">
<div class="panel-heading"><b><center>Banner System</center></b></div>
<div class="panel-body">
<center>
<form action="" method="post" >
<img src="https://your.domain.com/banner.php?ip=5.189.175.107&port=<?php echo $user['port']; ?>" class="img-responsive" alt="Banner">
</form>
<h3>You can add the sub code to your site.</h3>
<input type="text" id="html_val" class="form-control" onfocus="this.select();" onmouseup="return false;" value="https://your.domain.com/banner.php?ip=5.189.175.107&port=<?php echo $user['port']; ?>"></br>

</center>
</div>
</div>
</div>
	
	
<div class="col-lg-6">
<div class="panel panel-success">
<div class="panel-heading"><b><center>FAST</center></b></div>
<div class="panel-body">

<a href="?sayfa=log" class="btn btn-success btn-block" >TEASPEAK LOG</a>
<a href="?sayfa=banlistesi" class="btn btn-danger btn-block" >BAN LIST</a>  
<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Create Standard Channels</button>
</div>
</div>
</div>
	
<div class="col-lg-6">
<div class="panel panel-success">
<div class="panel-heading"><b><center>TEASPEAK DATE TIME</center></b></div>
<div class="panel-body">
<center>
<form action="?sayfa=saat" method="post" >
<img src="tasarim/saat.jpg" class="img-responsive" alt="Banner">

<h3>You Can Install Date Time System On Your Server.</h3>
<input type="submit" class="btn btn-success btn-block" value="Click Install" name="Portumuzse">
</form>
</center>
</div>
</div>
</div>



