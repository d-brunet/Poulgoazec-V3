<?php
$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');

	$numLot = $_POST["numLot"];
	$lot = explode("|", $numLot);

	$reqOwner = $bdd->prepare('SELECT L.Id AS statut, U.Id, raisonSocialeEntreprise, P.prixEnchere FROM UTILISATEUR U, POSTER P, LOT L WHERE U.Id = P.Id AND L.datePeche = P.datePeche AND L.idB = P.idB AND P.NumLot = L.NumLot AND L.datePeche = :datePeche AND L.idB = :idB AND L.NumLot = :numLot AND prixEnchere = (SELECT MAX(prixEnchere) FROM POSTER WHERE datePeche = :datePeche AND idB = :idB AND NumLot = :numLot);');
	$reqOwner->bindParam(":datePeche", $lot[0], PDO::PARAM_STR);
	$reqOwner->bindParam(":idB", $lot[1], PDO::PARAM_INT);
	$reqOwner->bindParam(":numLot", $lot[2], PDO::PARAM_INT);
	$reqOwner->execute();

	$error = $reqOwner->errorInfo();

	if($error[0] <> 0){
		echo 'Un problème est survenu lors de la requête SQL :
		'.$error[2];
	}

	$resOwner = $reqOwner->fetch(PDO::FETCH_ASSOC);
	if(isset($resOwner['Id'])){
		$result = $resOwner["prixEnchere"].'|'.$resOwner["raisonSocialeEntreprise"].'|'.$resOwner["statut"];
	}else{
		$reqPrize = $bdd->prepare("SELECT prixPlancher FROM LOT WHERE datePeche = :datePeche AND idB = :idB AND NumLot = :numLot;");
		$reqPrize->bindParam(":datePeche", $lot[0], PDO::PARAM_STR);
		$reqPrize->bindParam(":idB", $lot[1], PDO::PARAM_INT);
		$reqPrize->bindParam(":numLot", $lot[2], PDO::PARAM_INT);
		$reqPrize->execute();

		$errorP = $reqPrize->errorInfo();

		if($errorP[0] <> 0){
			echo 'Un problème est survenu lors de la requête SQL :
			'.$errorP[2];
		}

		$resPrize = $reqPrize->fetch(PDO::FETCH_ASSOC);
		if(isset($resPrize['prixPlancher'])){
			$result = $resPrize["prixPlancher"].'|'."Pas d'acheteur";
		}
	}

	echo $result;
?>