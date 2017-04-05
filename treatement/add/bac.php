<?php
$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');

	$reqBac = $bdd->prepare("INSERT INTO BAC(IdBac, Tare) VALUES (:code, :tare);");
	$reqBac->bindParam(":code", $_POST['code'], PDO::PARAM_STR);
	$reqBac->bindParam(":tare", $_POST['tare'], PDO::PARAM_INT);
	$reqBac->execute();

	$error = $reqBac->errorInfo();

	if($error[0] <> 0){
		echo 'Un problème est survenu lors de l\'insertion des données :
		'.$error[2];
	}else{
		echo 'L\'insertion dans la base à réussie';
	}
?>