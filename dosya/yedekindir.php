<?php

session_start();

require '../baglantilar/database.php';

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
$veri1 = $conn->prepare("select * from yedekler where port=?");
$veri1->execute(array($user['port']));
$islem1	= $veri1->fetch();

$var = $_SERVER['REMOTE_ADDR'];  
?>



<?php

 
     $file = $islem1['yedekadi'];
     
       header('Content-Type: application/octet-stream');  
       header('Content-Disposition: attachment; filename='.$file.'');  
       readfile("../$file");  
    
 




?>

