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
if ( isset($_POST['Bansil']) ){
	
require_once("baglantilar/panelbaglan.php");
 
$ts3_VirtualServer->request("bandelall");

}//

?>
	
<br><div class="col-lg-12">
<div class="panel panel-danger">
<div class="panel-heading"><b><center>TEASPEAK BAN LIST / MASS REMOVAL</center></b></div>
<div class="panel-body">
<form action="" method= "POST" >
<input type= "submit"  class="btn btn-danger btn-sm" name= "Bansil"  value= "Remove All Ban"/>
</form>
<br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
<th>IP</th>
<th>NAME</th>
<th>Time</th>
<th>banning the</th>
<th>Explanation</th>
      </tr>
    </thead>
    <tbody>

	<?php
	require_once("baglantilar/panelbaglan.php");
 
$banlist = $ts3_VirtualServer->banlist();

	 foreach ($banlist as $row)
  {

  if(empty($row['reason']))
  $reason = "No Description";
  else
  $reason = $row['reason'];

  if(empty($row['name']))
  $name = "I do not work";
  else
  $name = $row['name'];

  if(empty($row['ip']))
  $ip = "No IP";
  else
  $ip = $row['ip'];

  if($row['duration'] == 0)
  $expires = "Permanent";
  else
  $expires = date('d-m-Y H:i:s', $row['created'] + $row['duration']);

  echo '<td>' . $row['banid'] . '</td>';
  echo '<td>' . $ip . '</td>';
  echo '<td>' . $name . '</td>';
  echo '<td>' . $expires . '</td>';
  echo '<td>' . $row['invokername'] . '</td>';
  echo '<td>' . $reason . '</td>';
  echo '</tr>';
  }

  ?>
  </table>
</div>
</div>
</div>
  </div>
		
			    	
		
		
	