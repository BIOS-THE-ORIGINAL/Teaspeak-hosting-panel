<?php
##############################################################################################
# Yapimci: HASAN ATİLAN	& ASOSYAL HATUN	& BIOS                                               #
# MARKA: ANONYMOUS WORLD WIDE             	                                                 #
# Website: teaspeak.de                                                                       #
##############################################################################################

$cfg = include('baglantilar/ayar.php');

define('6755682621', TRUE);



function getContent(){

  if(isset($_GET['sayfa'])){

    switch ($_GET['sayfa']) {

      case 'anasayfa':

        include('inc/anasayfa.php'); 

        break;

		case 'sunucu':

        include('inc/sunucu.php');

        break;
		
		case 'yenile':

        include('inc/resetle.php');

        break;
		
		case 'yedek':

        include('inc/yedek.php');

        break;
		
		case 'yedekal':

        include('inc/yedekal.php');

        break;
		
		case 'yedekindir':

        include('inc/yedekindir.php');

        break;
		
		case 'yedekyukle':

        include('inc/yedekyukle.php');

        break;
		
		case 'yyedekindir':

        include('inc/yyedekindir.php');

        break;

		case 'kullanici':

        include('inc/kullanici.php');

        break;
		
		case 'eklentiler':

        include('inc/eklentiler.php');

        break;
		
		case 'oda':

        include('inc/oda.php');

        break;
		
		case 'banlistesi':

        include('inc/banlistesi.php');

        break;
		
		case 'log':

        include('inc/log.php');

        break;
		
		case 'odalar':

        include('inc/odalar.php');

        break;
		
		case 'saat':

        include('inc/saat.php');

        break;
		
		case 'bakimac':

        include('inc/bac.php');

        break;
		
		case 'bkapat':

        include('inc/bkapat.php');

        break;
		
		case 'hesap':

        include('inc/hesap.php');

        break;
		


      default:

        include('inc/404.php');

        break;

    }

  }else{

    include('inc/anasayfa.php');

  }

}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" href="tasarim/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="tasarim/favicon.ico" type="image/x-icon" />
<title>NewAndFast - TeaSpeak Hosting Panel</title>
<script type="text/javascript" src="tasarim/javascript.js"></script>
<script type="text/javascript" src="tasarim/jquery.js"></script>
<script type="text/javascript" src="tasarim/jquery-calendar.js"></script>
<script type="text/javascript" src="tasarim/vendor.js"></script>
<script type="text/javascript" src="tasarim/app.js"></script>
<script type="text/javascript" src="tasarim/jquery.flot.js"></script>
<script src="tasarim/jquery.min.js"></script>
<script type="text/javascript" src="tasarim/thickbox-compressed.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js?hl=tr'></script>
<link rel="stylesheet" href="tasarim/styles.css" type="text/css" />
<link rel="stylesheet" href="tasarim/jquery-calendar.css" type="text/css" />
<link rel="stylesheet" href="tasarim/reset.css" />
<link rel="stylesheet" href="tasarim/buttons.css" />
<link rel="stylesheet" href="tasarim/riseswaynet1.css" />
<link rel="stylesheet" href="tasarim/riseswaynet2.css" />
<link rel="stylesheet" href="tasarim/thickbox.css" type="text/css" />
<link rel="stylesheet" href="tasarim/font-awesome.min.css" />
<link rel="stylesheet" href="tasarim/style.css" />
</head>
<body>
<?php include 'baglantilar/ust.php'; ?>

 
	   


	  
	 		

<?php getContent(); ?>


                 
        






</body>
</html>
