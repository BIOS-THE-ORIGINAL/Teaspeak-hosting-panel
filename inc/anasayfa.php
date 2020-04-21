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

function formatBytes($size, $precision = 2)
	{
		$base = log($size, 1024);
		$suffixes = array('', 'KB', 'MB', 'GB', 'TB');   

		return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
	}

?>	
       
<?php

require_once("baglantilar/framework/TeamSpeak3.php");


require_once("baglantilar/panelbaglan.php");


	
$name = $ts3_VirtualServer->virtualserver_name;	
	
	
	?>					
		
		
<div id="content">			
			    	
		
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notification</h4>
      </div>
      <div class="modal-body">
	  
	  
	  
<h1>No DDOS Attack on Your Server Yet.</h1>		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
		
		
	
<script type="text/javascript">
function toggleview(element1) {

   element1 = document.getElementById(element1);

   if (element1.style.display == 'block' || element1.style.display == '')
      element1.style.display = 'none';
   else
      element1.style.display = 'block';

   return;
}
</script>
									
	

		  </td>
		 </tr>
		  		</tbody></table>
		<table width="60%" border="1" cellspacing="0" cellpadding="2" class="table table-bordered" style="margin-left:auto;margin-right:auto;width: 60%;margin-bottom: 0;border-bottom: 4px solid #ddd;">
			<tbody>
	    <tr>
		<td><center><h3><strong>TeaSpeak - Server Information</center></h3></strong></td>
		</tr>
		     </tbody>
		</table>
		
		<table width="60%" border="1" cellspacing="0" cellpadding="2" class="table table-bordered" style="margin-left:auto;margin-right:auto;width: 60%;">
		<tbody>
							  <tr>
		  	<td width="30%"><b>Server DNS / IP</b></td>
		    <td width="30%">
				5.189.175.107:<?php echo $user['port']; ?>			</td>
		  </tr>
	    <tr>
		<td width="30%"><b>Server Reset (Restart)</b><br />As a result of this process, the settings are not reset.</td>
		<td width="30%">
		<form action="" method="post">
        <a href="?sayfa=yenile" class="btn btn-sm btn-danger">Restart Server</a>
		</form></td>
		</tr>
		<tr>
		<td width="30%"><b>Server Name</b></td>
		<td width="30%">
	
	<?php echo $name; ?>		</td>
		</tr>
		<tr>
		<td width="30%"><b>Server Status</b></td>
		<td width="30%">
		Online		</td>
		</tr>
		 <tr>
		<td width="30%"><b>Has Attack (Notify Now)</b><br />If you are getting DDOS attack, you can report it.</td>
		<td width="30%">
		<form action="" method="post">
		<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">READ NOW</button>
		</form></td>
		</tr>
		<tr>
		<td width="30%"><b>Instant Download</b></td>
		<td width="30%">
		<?=  formatBytes($server_status = $ts3_VirtualServer->connection_bytes_received_total); ?>		</td>
		</tr>
		<tr>
		<td width="30%"><b>Instant Upload</b></td>
		<td width="30%">
		<?=  formatBytes($server_status = $ts3_VirtualServer->connection_bytes_sent_total); ?>		</td>
		</tr>
		<tr>
		<td width="30%"><b>Number of Active Persons</b></td>
		<td width="30%">
		<?= $server_status = $server_actuallyusers = $ts3_VirtualServer->virtualserver_clientsonline - $ts3_VirtualServer->virtualserver_queryclientsonline; ?>/<?=  $server_status = $ts3_VirtualServer->virtualserver_maxclients ?>		</td>
		</tr>
		<tr>
		<td width="30%"><b>Server Version</b></td>
		<td width="30%">
		<?=  $server_status = $ts3_VirtualServer->virtualserver_version ?>		</td>
		</tr>
		
		<tr>
		<td width="30%"><b>Number of Channels</b></td>
		<td width="30%">
		<?=  $server_status = $ts3_VirtualServer->virtualserver_channelsonline ?>		</td>
		</tr>
		
	<tr>
		<td width="30%"><b>Server Login</b><br/></td>
		<td width="30%">
	 <form action="" method="post">
        <a href="ts3server://5.189.175.107:<? echo $user['port']; ?>" class="btn btn-sm btn-success">Connect to Server</a>
	  </form>
	</td>
		<tr>
		
		</tr>
				
				<tr>
		<td width="30%"><b>Maintenance mode (Start)</b><br />Start Your Server.</td>
		<td width="30%">
		<form action="" method="post">
        <a href="?sayfa=bakimac" class="btn btn-sm btn-primary">Want to Start the Server?</a>
		</form></td>
		</tr>
		
		<tr>
		<td width="30%"><b>Maintenance mode (Stop)</b><br />Stop Your Server.</td>
		<td width="30%">
		<form action="" method="post">
        <a href="?sayfa=bkapat" class="btn btn-sm btn-warning">Want to Stop Your Server?</a>
		</form></td>
		</tr>
		
				</tbody></table>




		



										
				
								
								
								
								
				
								
								
						
					</div>			
			 <div class="panel panel-default">
  <div class="panel-body">
  <center></i> <b><a href="https://teaspeak.de/">Coding and Design by Hasan Atıl and BIOS for Teaspeak.de </a></span> 
 </i></span> 
 </div>
 </div>
 </div>      
  </div>

