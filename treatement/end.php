<?php
$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');

	$numLot = $_POST["numLot"];
	$lot = explode("|", $numLot);

	$reqOwner = $bdd->prepare('SELECT Id, prixEnchere FROM POSTER WHERE datePeche = :datePeche AND idB = :idB AND NumLot = :numLot AND prixEnchere = (SELECT MAX(prixEnchere) FROM POSTER WHERE datePeche = :datePeche AND idB = :idB AND NumLot = :numLot);');
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
		$reqOwned = $bdd->prepare('UPDATE LOT SET prixEnchereMax = :prize, Id = :idA WHERE datePeche = :datePeche AND idB = :idB AND NumLot = :numLot;');
		$reqOwned->bindParam(":datePeche", $lot[0], PDO::PARAM_STR);
		$reqOwned->bindParam(":idB", $lot[1], PDO::PARAM_INT);
		$reqOwned->bindParam(":numLot", $lot[2], PDO::PARAM_INT);
		$reqOwned->bindParam(":prize", $resOwner['prixEnchere'], PDO::PARAM_INT);
		$reqOwned->bindParam(":idA", $resOwner['Id'], PDO::PARAM_INT);
		$reqOwned->execute();
	}
?>