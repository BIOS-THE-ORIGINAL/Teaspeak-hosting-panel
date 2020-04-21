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
    
        
					
		
		
<div id="content">	
	<table width="50%" border="1" cellspacing="0" cellpadding="2" class="table table-bordered" align="center" style="width:50%;margin-left:auto; margin-right:auto;">
	<tr class="title">
 <th colspan="2" align="center"><center><font size="3"><b>Your Current Information</b></font></center></th>
</tr>
	  <tr>
	  	<td width="13%"><b>Name :</b></td>
	    <td width="37%"><?php echo $islem1["isimsoyisim"]; ?></td>
	  </tr>
	  <tr>
	    <td><b>E-mail Adress :</b></td>
	    <td><?php echo $islem1["email"]; ?></td>
	  </tr>
	  
	 

	  
	 
	 </tr>
	   <tr>
	 <td colspan="2" align="center"><font size="1">Please do not give your panel information to anyone YOUR.DOMAIN.COM is not responsible!</font></td>
	 </tr>

			 
	</table>
	
<hr>
	
	




<hr>

	
<form method="post">
		
		<table width="50%" border="1" cellspacing="0" cellpadding="2" class="table table-bordered" align="center" style="width:50%;margin-left:auto; margin-right:auto;">
		<tbody>


<form method="post">
<?php 
if ( isset($_POST['Start']) ){
	
$sifre = password_hash($_POST['password'], PASSWORD_BCRYPT);

$records2 = $conn->prepare('update users set password= :password where id= :id');
$records2->bindParam(':password', $sifre);
$records2->bindParam(':id', $_SESSION['user_id']);
$records2->execute();
$getir2 = $records2->fetch(PDO::FETCH_ASSOC);

}//

?>


	  <tr>
	    <td colspan="2" align="center"><b>Change &amp; Edit Password</b></td>
	  </tr>
	  <tr>
	    <td> <b>Current password :</b></td>
	    <td><div class="input-group"><input type="password" name="passwords" id="passwords" value="" class="form-control" style="height: 25px;"></div></td>
	  </tr>	  
	  <tr>
	    <td><b>New password :</b></td>
	    <td><div class="input-group"><input type="password" name="password" id="password" value="" class="form-control" style="height: 25px;"></div></td>
	  </tr>
	  <tr>
	    <td><b>Your New Password Again :</b></td>
	    <td><div class="input-group"><input type="password" name="password" id="password" value="" class="form-control" style="height: 25px;"></div></td>
	  </tr>
	 <tr>
	    <td colspan="2" align="center"><input type="submit" name="Start" id="Start" value="Update" class="btn btn-default btn-md">
	    <input type="hidden" name="Start" value="" />
		</td>
	  </tr>
	  
</form>
	</tbody>
	</table>

