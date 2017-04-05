<?php
	session_start();

	include('view/head.php');
	
	include('config.php');
	$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');

	if(!isset($_SESSION['id'])){
		$view = 'connection';
	}else{
		include('view/sommary.php');
		if(!isset($_GET['view'])){
			$view = 'home';
		}else{
			$view = $_GET['view'];
		}
	}
	
	include('view/headband.php');

	switch($view){
		case 'connection':
			include('controler/connection.php');
			break;
		case 'home':
			include('view/home.php');
			break;
		case 'lot':
			include('controler/listLot.php');
			break;
		case 'treatement':
			include('controler/treatement.php');
			break;
		case 'gestion':
			include('controler/gestion.php');
			break;
		case 'historic':
			include('controler/historic.php');
			break;
	}
	
	include('view/foot.php');
?>