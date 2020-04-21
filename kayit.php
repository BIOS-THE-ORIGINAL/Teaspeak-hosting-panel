<?php
error_reporting(1);
session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: index.php");
}

require 'baglantilar/database.php';
require 'baglantilar/baglan2.php';
$cfg = include('baglantilar/ayar.php');

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])):
	if($_POST['password'] != $_POST['confirm_password'])
	{
		$message = "<center><h4>Passwords do not match!</center></h4>";
	}
	else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$message = "<center><h4>Check the e-mail address you wrote down.</center></h4>";
	}
	else
	{
	
		$records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
		$records->bindParam(':email', $_POST['email']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		if( count($results) > 0 && $results){
			$message = "<center><h4>The e-mail address you typed is already registered!</center></h4>";
		}
		else
		{
			
			$id = $conn->lastInsertId();
			$cek			= $conn->query("SELECT * FROM users WHERE port = ".$id."")->fetch();
			
			$mysqldengelenport = $user["port"];
 $port = rand(1,4000);

 if($mysqldengelenport == $port){
  if(in_array($port));
  
 }else{
  echo $port;
 }
			$sunucuismi = 'my new server';
		$kapasite = '20';
		$zaman = time();
		$zaman2 = date('[Y-m-d]-[H:i]',$zaman);
		
		if(!empty($_POST['port'])) {
			
			$port = $_POST['port'];
			try
			{
				$new_ts3 = $ts3->serverCreate(array(
				"virtualserver_name" => $sunucuismi,
				"virtualserver_maxclients" => $kapasite,
				"virtualserver_port" => $port,
				"virtualserver_name_phonetic" => $zaman2,
				"virtualserver_hostbutton_tooltip" => "My Company",
				"virtualserver_hostbutton_url" => "http://www.example.com",
				"virtualserver_hostbutton_gfx_url" => "http://www.example.com/buttons/button01_24x24.jpg",
				));
				
				$token = $new_ts3['token'];
				
			}
			catch(Exception $e)
			{
				echo "Error (ID " . $e->getCode() . ") <b>" . $e->getMessage() . "</b>";
			}
			} else{
			
			try
			{
				$new_ts3 = $ts3->serverCreate(array(
				"virtualserver_name" => $sunucuismi,
				"virtualserver_maxclients" => $kapasite,
				"virtualserver_port" => $port,
				"virtualserver_autostart" => 0,
				"virtualserver_name_phonetic" => $zaman2,
				"virtualserver_hostbutton_tooltip" => "My Company",
				"virtualserver_hostbutton_url" => "http://www.example.com",
				"virtualserver_hostbutton_gfx_url" => "http://www.example.com/buttons/button01_24x24.jpg",
				));
				
				
				
			}
			catch(Exception $e)
			{
				echo "Error (ID " . $e->getCode() . ") <b>" . $e->getMessage() . "</b>";
			}
			
		}


function GetIP(){
	if(getenv("HTTP_CLIENT_IP")) {
 		$ip = getenv("HTTP_CLIENT_IP");
 	} elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 		$ip = getenv("HTTP_X_FORWARDED_FOR");
 		if (strstr($ip, ',')) {
 			$tmp = explode (',', $ip);
 			$ip = trim($tmp[0]);
 		}
 	} else {
 	$ip = getenv("REMOTE_ADDR");
 	}
	return $ip;
}



		
			// veritabani ayari
			$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
			$postmail = $_POST['email'];
			$isim = $_POST['isimsoyisim'];
			$var = GetIP();
			$s = $conn->prepare('SELECT * FROM users WHERE iplog = :iplog');
		$s->bindParam(':iplog', $var);
		$s->execute();
		$ss = $s->fetch(PDO::FETCH_ASSOC);
			
			if(count($ss) > 0 && $ss){
				$message = "<center><h4>Multi Membership is Forbidden!</center></h4>";
			}else{
			
			$sql = "INSERT INTO users (email, password, port, isimsoyisim, iplog) VALUES (:email, :password, :port, :isimsoyisim, :iplog)";
			$stmt = $conn->prepare($sql); /// 

			$stmt->bindParam(':email', $postmail);
			$stmt->bindParam(':password', $pass);
			$stmt->bindParam(':port', $port);
			$stmt->bindParam(':isimsoyisim', $isim);
			$stmt->bindParam(':iplog', $var);
			

			if( $stmt->execute() ):
				$message = '<center><h4>Your account has been successfully created!</center></h4>';
			else:
				$message = '<center><h4>There was a problem creating your account!</center></h4>';
			endif;
			}
		}
	}
	
endif;


				  
?>

<!DOCTYPE html>
<html lang="en">


<head>
	    <meta charset="utf-8">
	    <title>THP - Register</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <link href="tasarim/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<link href="tasarim/css/font-awesome.min.css" rel="stylesheet">

		<link href="tasarim/css/ionicons.min.css" rel="stylesheet">
		
		<link href="tasarim/css/simplify.min.css" rel="stylesheet">
	
  	</head>

  	<body class="overflow-hidden light-background">
		<div class="wrapper no-navigation preload">
			<div class="sign-in-wrapper">
				<div class="sign-in-inner">
					<div class="login-brand text-center">
						<i class="fa fa-refresh fa-spin m-right-xs"></i> YOUR.<strong class="text-skin">DOMAIN.COM</strong>
					</div>
<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>
					<form action="kayit.php" method="POST">
					
					<div class="form-group m-bottom-md">
							<input type="text" id="isimsoyisim" name="isimsoyisim" class="form-control" placeholder="Name surname" required>
						</div>
						<div class="form-group m-bottom-md">
							<input type="text" id="email" name="email" class="form-control" placeholder="Email Adress" required>
						</div>
						<div class="form-group m-bottom-md">
							<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
						</div>
						<div class="form-group">
							<input type="password" id="confirm_password" name="confirm_password" minlength="4" class="form-control" placeholder="Password Repeat" required>
						</div>
						<div class="form-group">
							<div class="custom-checkbox">
								<input type="checkbox" id="chkAccept" required>
								<label for="chkAccept"></label>
							</div>
							Accept Agreement
						</div>
					
						<div class="m-top-md p-top-sm">
							<center><button class="btn btn-success block">Create Account</button></center>
						</div>
					</form>
					<form action="giris.php" method="POST">
						<div class="m-top-md p-top-sm">
							<div class="font-12 text-center m-bottom-xs">Do you have an account?</div>
							<center><button href="giris.php" class="btn btn-default block">Sign In</button></center>
						</div>
					</form>
				</div>
			</div>
		</div>

		<a href="#" id="scroll-to-top" class="hidden-print"><i class="icon-chevron-up"></i></a>

	    
		
		<script src="tasarim/js/jquery-1.11.1.min.js"></script>
		
	    <script src="tasarim/bootstrap/js/bootstrap.min.js"></script>
		
		<script src='tasarim/js/jquery.slimscroll.min.js'></script>
		
		<script src='tasarim/js/jquery.popupoverlay.min.js'></script>

		<script src='tasarim/js/modernizr.min.js'></script>
		
		<script src="tasarim/js/simplify/simplify.js"></script>
	
  	</body>


</html>
