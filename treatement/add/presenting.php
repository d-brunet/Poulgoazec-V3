<?php
$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');

	$reqPresenting = $bdd->prepare("INSERT INTO PRESENTATION(CodePresentation, LibellePresentation) VALUES (:code, :name);");
	$reqPresenting->bindParam(":code", $_POST['code'], PDO::PARAM_STR);
	$reqPresenting->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
	$reqPresenting->execute();

	$error = $reqPresenting->errorInfo();

	if($error[0] <> 0){
		echo 'Un problème est survenu lors de l\'insertion des données :
		'.$error[2];
	}else{
		echo 'L\'insertion dans la base à réussie';
	}
?>