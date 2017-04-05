<?php
	$bdd = new PDO('mysql:host=localhost;dbname=POULGOAZEC','root','ArtemisLL');

	$reqFishing = $bdd->prepare("INSERT INTO PECHE(datePeche, IdB) VALUES (:date, :ship);");
	$reqFishing->bindParam(":date", $_POST['date'], PDO::PARAM_STR);
	$reqFishing->bindParam(":ship", $_POST['ship'], PDO::PARAM_INT);
	$reqFishing->execute();

	$error = $reqFishing->errorInfo();

	if($error[0] <> 0){
		echo 'Un problème est survenu lors de l\'insertion des données :
		'.$error[2];
	}else{
		echo 'L\'insertion dans la base à réussie';
	}
?>