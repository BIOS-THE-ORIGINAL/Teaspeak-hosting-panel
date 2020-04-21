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

<?
require_once("baglantilar/ts3admin.class.php");
$tsip 		 = "127.0.0.1";
		$tsquery 	 = 10101;
		$tskullanici = "serveradmin";
		$tssifre     = "passwird";
		$tsport		 = $user['port'];


	?>	
	