<?php
$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');

	$idA = $_POST['id'];
	$offer = $_POST['offer'];
	$numLot = $_POST['numLot'];
	$lot = explode("|", $numLot);
	$biddingTime = date("Y-m-d H:i:s");
	
	//On supprime l'offre présente dans la base. Si il n'y a pas d'offre de cette acheteur dans la base, rien ne se passe. 

	if($_POST['statut'] <> "Crieur"){
		$reqDelete = $bdd->prepare('DELETE FROM POSTER WHERE datePeche = :datePeche AND idB = :idB AND NumLot = :numLot AND Id = :idA;');
		$reqDelete->bindParam(":datePeche", $lot[0], PDO::PARAM_STR);
		$reqDelete->bindParam(":idB", $lot[1], PDO::PARAM_INT);
		$reqDelete->bindParam(":numLot", $lot[2], PDO::PARAM_INT);
		$reqDelete->bindParam(":idA", $idA, PDO::PARAM_INT);
		$reqDelete->execute();

		$reqBidding = $bdd->prepare('INSERT INTO POSTER(datePeche, idB, NumLot, Id, prixEnchere, HeureEnchere) VALUES(:datePeche, :idB, :numLot, :idA, :offer, :biddingTime);');
		$reqBidding->bindParam(":datePeche", $lot[0], PDO::PARAM_STR);
		$reqBidding->bindParam(":idB", $lot[1], PDO::PARAM_INT);
		$reqBidding->bindParam(":numLot", $lot[2], PDO::PARAM_INT);
		$reqBidding->bindParam(":idA", $idA, PDO::PARAM_INT);
		$reqBidding->bindParam(":offer", $offer, PDO::PARAM_INT);
		$reqBidding->bindParam(":biddingTime", $biddingTime, PDO::PARAM_STR);
		$reqBidding->execute();

		$error = $reqBidding->errorInfo();

		if($error[0] <> 0){
			echo 'Un problème est survenu lors de la requête SQL :
			'.$error[2];
		}

	}else{
		$reqNewPrize = $bdd->prepare("UPDATE LOT SET prixPlancher = :offer WHERE datePeche = :datePeche AND idB = :idB AND NumLot = :numLot;");
		$reqNewPrize->bindParam(":datePeche", $lot[0], PDO::PARAM_STR);
		$reqNewPrize->bindParam(":idB", $lot[1], PDO::PARAM_INT);
		$reqNewPrize->bindParam(":numLot", $lot[2], PDO::PARAM_INT);
		$reqNewPrize->bindParam(":offer", $offer, PDO::PARAM_INT);
		$reqNewPrize->execute();

		$error = $reqNewPrize->errorInfo();

		if($error[0] <> 0){
			echo 'Un problème est survenu lors de la requête SQL :
			'.$error[2];
		}
	}
?>