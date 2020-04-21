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

// load framework files
require_once("baglantilar/framework/TeamSpeak3.php");

// connect to local server, authenticate and spawn an object for the virtual server on port 9987

require_once("baglantilar/panelbaglan.php");


	if(isset($_SESSION["server"])){
	$ts3_VirtualServer = unserialize($_SESSION["server"]);}
	else {echo'<meta content="12;url=setting.php">';}
	$ts3_VirtualServer->selfUpdate(array('client_nickname'=>"Web Panel"));
	$zero = $one = $two = $three = '';
if (isset($_POST['edit'])){
	$name = $_POST['nameofserver'];
    $welcomemessage = $_POST['welcomemessage'];
	$gfximgurl = $_POST['gfximgurl'];
	$gfxurl = $_POST['gfxurl'];
	$hostmessage = $_POST['hostmessage'];

$edit = array("virtualserver_welcomemessage=$welcomemessage","virtualserver_name=$name",
"virtualserver_hostbanner_gfx_url=$gfximgurl",
"virtualserver_hostbanner_url=$gfxurl","virtualserver_hostmessage=$hostmessage");
$ts3_VirtualServer->modify($edit);
}
	$name = $ts3_VirtualServer->virtualserver_name;
	$welcomemessage = $ts3_VirtualServer->virtualserver_welcomemessage;
	$gfximgurl = $ts3_VirtualServer->virtualserver_hostbanner_gfx_url;
	$gfxurl = $ts3_VirtualServer->virtualserver_hostbanner_url;
	$hostmessage = $ts3_VirtualServer->virtualserver_hostmessage;
	
	
	?>
	
<?php

	try {	
		$permList = $ts3_VirtualServer->serverGroupList();
		$tokenList = $ts3_VirtualServer->privilegeKeyList(true);
	} catch( Exception $e ) {
		$tokenList = array();
	}

	if( isset($_GET['kaldirID']) ) {
		$_SESSION['flash']['success'] = "Token Removed (TokenID: ".$_GET['kaldirID'].")";
		$ts3_VirtualServer->privilegeKeyDelete($_GET['kaldirID']);
		header('Location: tokenlist.php');
		exit();
	} elseif( isset($_POST['permidd']) ) {
		if( $_POST['permidd'] > 0 ) {
			$var = false;
			foreach($permList as $permm): 
				if($permm['type'] == 1 && $permm['sgid'] == (int)$_POST['permidd']) {
					$var = true;
					break;
				}
			endforeach;
			if( $var ) {
				$arr_ServerGroup = $ts3_VirtualServer->serverGroupGetById((int)$_POST['permidd']);
				$ts3_PrivilegeKey = $arr_ServerGroup->privilegeKeyCreate();
				$_SESSION['flash']['success'] = "Token Created! (TOKEN: ".$ts3_PrivilegeKey.")";
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?sayfa=sunucu">';
				exit();
			} else {
				$_SESSION['flash']['danger'] = "Token Could Not Be Created!";
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?sayfa=sunucu">';
				exit();
			}
	
}
	}


?>				
		
		
			    	
		
		
		

									
	


				
 <center><br><div class="col-sm-12">
		
  <div class="panel panel-default">

  <div class="panel-heading">Edit Server</div>

  <div class="panel-body">

<form class="form-horizontal" action="" method="post">

  <fieldset>

     <div class="form-group">

      <label for="nameofserver" class="col-lg-2 control-label">Server name</label>

      <div class="col-lg-10">

        <input required type="text" class="form-control" id="nameofserver" name="nameofserver" value="<?php echo $name; ?>">

      </div>

    </div>

<fieldset>

    <div class="form-group">

      <label for="welcomemessage" class="col-lg-2 control-label">Welcome message</label>
      <div class="col-lg-10">

        <input type="text" class="form-control" id="welcomemessage" name="welcomemessage" placeholder="<?php echo $welcomemessage; ?>">

      </div>

    </div>

	<div class="form-group">

      <label for="hostmessage" class="col-lg-2 control-label">Host Message</label>

      <div class="col-lg-10">

	  <input type="text" class="form-control" id="hostmessage" name="hostmessage" value="<?php echo $hostmessage; ?>">
	  
        

      </div>
	  
  </div>

  <div class="form-group">

      <label for="gfximgurl" class="col-lg-2 control-label">Server banner image</label>

      <div class="col-lg-10">

	  <input type="text" class="form-control" id="gfximgurl" name="gfximgurl" value="<?php echo $gfximgurl; ?>">
	  
        

      </div>
	  
  </div>
  
  <div class="form-group">

      <label for="gfxurl" class="col-lg-2 control-label">Server banner link</label>

      <div class="col-lg-10">

	  <input type="text" class="form-control" id="gfxurl" name="gfxurl" value="<?php echo $gfxurl; ?>">
	  
        

      </div>
	  
  </div>
  
    <div class="form-group">

	<div class="form-actions">
					            <center><button type="submit" name="edit" class="btn btn-primary btn-large">Save</button>
					          </div>
					        </fieldset>
							
  </fieldset>

</form>

</form>

</div>
</div>

 

  <div class="col-sm-14">
		
  <div class="panel panel-default">

  <div class="panel-heading">Create Authorization Code</div>

  <div class="panel-body">

<form class="form-horizontal" action="" method="post">

  <fieldset>


      <div class="form-group">
									<center><label>Choose Authority</label>
									<select name="permidd"  placeholder="100" class="form-control" style="width: 100%;
    background-clip: border-box;">
	
	<?php foreach($permList as $permm): if($permm['type'] != 1) continue; ?>
				<option value="<?=$permm['sgid']?>"><?php echo '(ID '.$permm['sgid'].') '.$permm['name']; ?></option>
				<?php endforeach; ?>
																			</select>
								</div>
		<center><button class="btn btn-primary btn-large" style="color:white;">CREATE TOKEN</button>
				
      </div>



		<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>
	</div>

  <div class="col-sm-14">
		
  <div class="panel panel-default">

  <div class="panel-heading">Authority Codes</div>

  <div class="panel-body">
				</div>				
<div class="panel-body"><table class="table table-striped table-hover">
	<thead>
	<tr>
		<th>Token</th>
		<th>Tip</th>
		<th>Authority</th>
		<th>History</th>
	</tr>
	</thead>
	<tbody>
	<?php if(count($tokenList) > 0): foreach($tokenList as $tokenn): ?>
	<tr>
		<td><?php echo $tokenn['token']; ?></td>
		<td><?php echo $tokenn['token_type'] ? 'Channel (Kanal)' : 'Server' ?></td>
		<td><?php echo $tokenn['token_id1'] ? $tokenn['token_id1'] : '-' ?></td>
		<td><?php echo date('d.m.Y - H:i:s', $tokenn['token_created']); ?></td>

	</tr>
	<?php endforeach; else: ?>
	<tr>
		<td colspan="7" style="text-align:center;">The Token List is immaculate!</td>
	</tr>
	<?php endif; ?>
	</tbody>
</table>


</div>
</div>

        </div>
		
      </div>
	  
    </div>
</ul>

