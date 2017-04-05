<?php
if($_SESSION['statut'] == 'Crieur'){
	if(!isset($_GET['action'])){
		$action = 'index';
	}else{
		$action = $_GET['action'];
	}

	switch($action){
		case 'index':
			include('view/gestion.php');
			break;
		case 'lot':
			include('treatement/lot.php');
			include('view/add/lot.php');
			break;
		case 'ship':
			include('view/add/ship.php');
			break;
		case 'species':
			include('view/add/species.php');
			break;
		case 'bac':
			include('view/add/bac.php');
			break;
		case 'fishing':
			include('treatement/fishing.php');
			include('view/add/fishing.php');
			break;
		case 'presenting':
			include('view/add/presenting.php');
			break;
		case 'quality':
			include('view/add/quality.php');
			break;
		case 'height':
			include('view/add/height.php');
			break;
	}
}else{
	header('location:index.php?view=home');
}
?>