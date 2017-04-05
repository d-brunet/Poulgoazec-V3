<?php
	if(!isset($_GET['action'])){
		$action = 'index';
	}else{
		$action = $_GET['action'];
	}

	switch($action){
		case 'index':
			include('view/listLot.php');
			break;
		case 'lot':
			$numLot = $_GET['lot'];
			$lot = explode('|', $numLot);

			$reqLot = $bdd->prepare('SELECT B.NomB, E.Nom, L.poidsBrutLot, PR.LibellePresentation, L.IdTaille FROM LOT L, PECHE P, BATEAU B, ESPECE E, PRESENTATION PR WHERE L.idB=P.idB AND L.datePeche=P.datePeche AND P.idB=B.idB AND E.IdEspece=L.IdEspece AND PR.CodePresentation=L.CodePresentation AND L.datePeche = :datePeche AND L.idB = :idB AND L.NumLot = :numLot;');
			$reqLot->bindParam(":datePeche", $lot[0], PDO::PARAM_STR);
			$reqLot->bindParam(":idB", $lot[1], PDO::PARAM_INT);
			$reqLot->bindParam(":numLot", $lot[2], PDO::PARAM_INT);
			$reqLot->execute();

			$resLot = $reqLot->fetch(PDO::FETCH_ASSOC);
			include('view/lot.php');
			break;
	}
?>