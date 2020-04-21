<?php
error_reporting(0);
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

if(!defined('6755682621')) {

   die('Direct access not permitted');

}

?>

<?php
$veri1 = $conn->prepare("select * from users where id=?");
$veri1->execute(array($_SESSION['user_id']));
$islem1	= $veri1->fetch();

$var = $_SERVER['REMOTE_ADDR'];
 

?>

<div id="holder" >

<header class="navbar navbar-inverse" role="banner" style="border-bottom: 2px solid #ddd;">
<div class="container">

    


</div>
</header>

<div style="margin-left:auto;margin-right:auto;width: 80%;">

 
<div class="panel panel-default">
  <div class="panel-body"><div style="float:left;">
  <i class="fa fa-user-circle-o"></i> <b>System Announcement:</b> </i> our site is now online and will be tested for functionality with php version 7.4.4</span> 
 </i></span> 
 </div>
 <div style="float:right;"><span class="label label-info"><i class="fa fa-info-circle"></i> Version: v1.1.2</span></div>
 </div>
 </div>

<div class="panel-group">
	 
    <div class="panel panel-primary">
      <div class="panel-body">
<div align="center"><b><font size="3">
<a href="/">YOUR.DOMAIN.COM</a> Professional TeaSpeak Servers
</font>
</b>
</div>
      </div>
	 </div>
	 
</div>


<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-body">
	  <div align="center"><b><font size="4">
	Hello and Welcome to your Server Controll Panel:</span>   
		</font>
		</b>
</div>
      </div>
	 </div>
	 
</div>
	   
        		
<div style="margin-left:auto; margin-right:auto;width:60%;">


</div>
<center></center></div>


    <div id="page_middle">
	
        <ul class="nav nav-tabarka nav-tabs">
                                <li class="active">
					<a href="?sayfa=anasayfa"><i class="fa fa-user"></i> Home</a>
				</li>
								
				 <li class="">
					<a href="?sayfa=sunucu"><i class="fa fa-server"></i> Server Management</a>
				</li>
				                		       
				
                                            

 <li class="">
                    <a href="?sayfa=yedek"><i class="fa fa-rss"></i> Backup Management</a>
                </li>   
				
				 <li class="">
                    <a href="?sayfa=kullanici"><i class="fa fa-adjust"></i> User Management</a>
                </li>  
				
				 <li class="">
                    <a href="?sayfa=eklentiler"><i class="fa fa-rocket"></i> Additions</a>
                </li> 

 <li class="">
                    <a href="?sayfa=odalar"><i class="fa fa-file-archive-o"></i> Channel List</a>
                </li> 
					
                                		
				 <li class="">
                    <a href="?sayfa=hesap"><i class="fa fa-user-circle"></i> Account Management</font></a>
                </li>	
				
 <li class=""> 
 						<li class="">
                    <a href="cikis.php"><i class="fa fa-sign-out"></i> Logout</a>
                </li>				
		
                               
            
          </ul>
