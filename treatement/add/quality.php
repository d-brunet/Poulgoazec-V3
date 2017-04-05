<?php
$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');

	$reqQuality = $bdd->prepare("INSERT INTO QUALITE(IdQualite, LibelleQualite) VALUES (:code, :name);");
	$reqQuality->bindParam(":code", $_POST['code'], PDO::PARAM_STR);
	$reqQuality->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
	$reqQuality->execute();

	$error = $reqQuality->errorInfo();

	if($error[0] <> 0){
		echo 'Un problème est survenu lors de l\'insertion des données :
		'.$error[2];
	}else{
		echo 'L\'insertion dans la base à réussie';
	}
?>