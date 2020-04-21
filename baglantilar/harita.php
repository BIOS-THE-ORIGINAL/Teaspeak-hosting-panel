<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password,token,port,credits FROM users WHERE id = :id');
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
require_once("baglanti/framework/TeamSpeak3.php");

// connect to local server, authenticate and spawn an object for the virtual server on port 9987

require_once("baglanti/panelbaglan.php");


	
	
	
	
	?>
<html>
<head>
<TITLE>THP - Edit server</TITLE>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="icon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="free ts3, free teamspeak3, free teamspeak 3, free ts3 server, free server, ücretsiz teamspeak 3 server, ücretsiz ts3, ücretsiz ts3 server, ucretsiz ts3, ucretsiz teamspeak3, ucretsiz ts3 server"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#2c3e50">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <link href="tasarim/bootstrap.min.css" rel="stylesheet">

    <link href="tasarim/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="tasarim/signin.css" rel="stylesheet">

    <script src="tasarim/ie-emulation-modes-warning.js"></script>

</head>
<body>
<div class="container">
	<form action="duzenleislem.php" class="form-signin" method="post">
         <center><h2 class="form-signin-heading">Instant Server Information</h2></br>
		 
		 <?php $map = $ts3_VirtualServer->getViewer(new TeamSpeak3_Viewer_Html("baglanti/framework/Viewer/", "images/countryflags/", "data:image")); ?>

		  <?= $map; ?>
					 </br>
				<a class="btn btn-lg btn-primary btn-block" href="yonetimpaneli.php">Turn back</a>
               </form>
			</div>
</head>
<body>

</body>
</html>