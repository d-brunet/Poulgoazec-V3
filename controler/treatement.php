<?php
	$treatement = $_GET['action'];

	switch($treatement){
		case 'bidding':
			include('treatement/bidding.php');
			break;
	}
?>