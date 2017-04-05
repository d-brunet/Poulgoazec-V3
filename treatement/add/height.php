<?php
$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');

	$specification = "Taille de ".$_POST['height'];

	$reqQuality = $bdd->prepare("INSERT INTO TAILLE(IdTaille, SpecificationTaille) VALUES (:height, :specification);");
	$reqQuality->bindParam(":height", $_POST['height'], PDO::PARAM_INT);
	$reqQuality->bindParam(":specification", $specification, PDO::PARAM_STR);
	$reqQuality->execute();

	$error = $reqQuality->errorInfo();

	if($error[0] <> 0){
		echo 'Un problème est survenu lors de l\'insertion des données :
		'.$error[2];
	}else{
		echo 'L\'insertion dans la base à réussie';
	}
?>