<?php
$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');

	$reqShip = $bdd->prepare("INSERT INTO BATEAU(NomB, ImmatriculationB) VALUES (:name, :immat);");
	$reqShip->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
	$reqShip->bindParam(":immat", $_POST['immat'], PDO::PARAM_STR);
	$reqShip->execute();

	$error = $reqShip->errorInfo();

	if($error[0] <> 0){
		echo 'Un problème est survenu lors de l\'insertion des données :
		'.$error[2];
	}else{
		echo 'L\'insertion dans la base à réussie';
	}
?>