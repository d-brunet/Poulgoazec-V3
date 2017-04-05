<?php
$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');
	$reqDate = $bdd->prepare("SELECT datePeche FROM PECHE WHERE datePeche = :date AND IdB = :nameShip;");
	$reqDate->bindParam(":date", $_POST['date'], PDO::PARAM_STR);
	$reqDate->bindParam(":nameShip", $_POST['nameShip'], PDO::PARAM_INT);
	$reqDate->execute();

	$resDate = $reqDate->fetch(PDO::FETCH_ASSOC);

	if(!isset($resDate['datePeche'])){
		$reqFishing = $bdd->prepare("INSERT INTO PECHE(datePeche, IdB) VALUES (:date, :nameShip);");
		$reqFishing->bindParam(":date", $_POST['date'], PDO::PARAM_STR);
		$reqFishing->bindParam(":nameShip", $_POST['nameShip'], PDO::PARAM_INT);
		$reqFishing->execute();

		$errorFishing = $reqFishing->errorInfo();

		if($errorFishing[0] <> 0){
			echo 'Un problème est survenu lors de l\'insertion des données :
			'.$errorFishing[2];
		}
	}

	$dateBid = date("Y-m-d");
	$dateStartBid = date("Y-m-d H:i:s");

	$reqIt = $bdd->prepare("SELECT MAX(NumLot) AS 'numLot' FROM LOT WHERE datePeche = :date AND IdB = :nameShip;");
	$reqIt->bindParam(":date", $_POST['date'], PDO::PARAM_STR);
	$reqIt->bindParam(":nameShip", $_POST['nameShip'], PDO::PARAM_INT);
	$reqIt->execute();

	$resIt = $reqIt->fetch(PDO::FETCH_ASSOC);
	$iteration = ($resIt['numLot'] + 1);

	$reqLot = $bdd->prepare("INSERT INTO LOT(datePeche, IdB, NumLot, IdEspece, IdTaille, CodePresentation, IdQualite, IdBac, poidsBrutLot, dateEnchere, heureDebutEnchere, prixDepart, prixPlancher) VALUES (:date, :nameShip, :numLot, :codeEspece, :taille, :codePresenting, :codeQuality, :tare, :poid, :dateEnchere, :heureDebutEnchere, :prize, :prize);");
	$reqLot->bindParam(":date", $_POST['date'], PDO::PARAM_STR);
	$reqLot->bindParam(":nameShip", $_POST['nameShip'], PDO::PARAM_INT);
	$reqLot->bindParam(":numLot", $iteration, PDO::PARAM_INT);
	$reqLot->bindParam(":codeEspece", $_POST['codeEspece'], PDO::PARAM_INT);
	$reqLot->bindParam(":taille", $_POST['taille'], PDO::PARAM_INT);
	$reqLot->bindParam(":codePresenting", $_POST['codePresenting'], PDO::PARAM_STR);
	$reqLot->bindParam(":codeQuality", $_POST['codeQuality'], PDO::PARAM_STR);
	$reqLot->bindParam(":tare", $_POST['tare'], PDO::PARAM_STR);
	$reqLot->bindParam(":poid", $_POST['poid'], PDO::PARAM_INT);
	$reqLot->bindParam(":dateEnchere", $dateBid, PDO::PARAM_STR);
	$reqLot->bindParam(":heureDebutEnchere", $dateStartBid, PDO::PARAM_STR);
	$reqLot->bindParam(":prize", $_POST['prize'], PDO::PARAM_INT);
	$reqLot->execute();

	$errorLot = $reqLot->errorInfo();

	if($errorLot[0] <> 0){
		echo 'Un problème est survenu lors de l\'insertion des données :
		'.$errorLot[2];
	}else{
		echo 'L\'insertion dans la base à réussie';
	}
?>