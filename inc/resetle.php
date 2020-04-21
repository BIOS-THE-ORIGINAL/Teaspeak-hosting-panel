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

<?php

// load framework files
require_once("baglantilar/panelbaglan.php");



$isim=$ts3_VirtualServer->serverIdGetByPort($user['port']);
$ts3_VirtualServer->serverStop($isim);
$ts3_VirtualServer->serverStart($isim);

  
	?>
	<?php echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?sayfa=anasayfa">'; ?>