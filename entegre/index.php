<?php

session_start();

require '../hasan/baglantilar/database.php';

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
	
	include "ts.class.php";

	$tsip 		 = "5.189.175.107";
	$tsquery 	 = 10101;
	$tskullanici = "serveradmin";
	$tssifre     = "EUWufrfXLQqb";
	$tsport		 = "9988";

	$tsAdmin = new ts3admin($tsip, $tsquery);
	if($tsAdmin->getElement('success', $tsAdmin->connect())) {
		$tsAdmin->login($tskullanici, $tssifre);
		$tsAdmin->selectServer($tsport);
	
		$svbilgi = $tsAdmin->serverInfo();
			foreach ($svbilgi as $key) {
				$tssunucuadi   = $key["virtualserver_name"];
				$tsdns		   = "5.189.175.107";
				$tsoyuncu      = $key["virtualserver_clientsonline"]."/".$key["virtualserver_maxclients"];
				$tsdurum 	   = $key["virtualserver_status"] == online ? 'Açık' : 'Kapalı';
			}

	}

	// İçerik türünü belirtelim
	header('Content-type: image/png');

	// Resmi oluşturalım
	$banner = imagecreatefrompng("ts3-sv-banner.png"); 

	// Renkleri tanımlayalım
	$siyah   = imagecolorallocate($banner, 0,0,0);
    $turuncu = imagecolorallocate($banner, 220, 98, 20);
    $gri 	 = imagecolorallocate($banner, 255, 99, 0);
    $koyu    = imagecolorallocate($banner, 255, 99, 0);
    $yesil   = imagecolorallocate($banner, 17, 173, 23);

	// Buraya kendi dosya yolunuzu yazın
	$font = 'GeomanistRegular.ttf';

	// sunucu adı ekleyelim
	imagettftext($banner, 10, 0, 75, 20, $turuncu, $font, "Server Name:");
	imagettftext($banner, 10, 0, 75, 20, $gri, $font, "Server Name:");
	imagettftext($banner, 10, 0, 95, 35, $siyah, $font, $tssunucuadi);

	// dns ekleyelim
	imagettftext($banner, 10, 0, 75, 53, $turuncu, $font, "İP Adress:");
	imagettftext($banner, 10, 0, 75, 53, $turuncu, $font, "İP Adress:");
	imagettftext($banner, 10, 0, 75, 65, $siyah, $font, $tsdns);

	// port ekleyelim
	imagettftext($banner, 10, 0, 215, 53, $turuncu, $font, "Port:");
	imagettftext($banner, 10, 0, 215, 53, $turuncu, $font, "Port:");
	imagettftext($banner, 10, 0, 215, 65, $siyah, $font, $tsport);

	// duruö ekleyelim
	imagettftext($banner, 10, 0, 270, 53, $turuncu, $font, "Player:");
	imagettftext($banner, 10, 0, 270, 53, $turuncu, $font, "Player:");
	imagettftext($banner, 10, 0, 270, 65, $siyah, $font, $tsoyuncu);

	imagettftext($banner, 10, 0, 350, 53, $turuncu, $font, "Status:");
	imagettftext($banner, 10, 0, 350, 53, $turuncu, $font, "Status:");
	imagettftext($banner, 10, 0, 350, 65, $yesil, $font, $tsdurum);
	
	// imagejpeg()'ye göre daha temiz sonuç veren imagepng()'yi kullanalım
	imagepng($banner);
	imagedestroy($banner);

?>