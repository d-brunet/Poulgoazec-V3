<?php
$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');
	
	$reqSpecies = $bdd->prepare("INSERT INTO ESPECE(Nom, NomScientifique, NomCommun) VALUES (:name, :nameSci, :nameCom);");
	$reqSpecies->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
	$reqSpecies->bindParam(":nameSci", $_POST['nameSci'], PDO::PARAM_STR);
	$reqSpecies->bindParam(":nameCom", $_POST['nameCom'], PDO::PARAM_STR);
	$reqSpecies->execute();

	$error = $reqSpecies->errorInfo();

	if($error[0] <> 0){
		echo 'Un problème est survenu lors de l\'insertion des données :
		'.$error[2];
	}else{
		echo 'L\'insertion dans la base à réussie';
	}
?>