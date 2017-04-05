<?php
	$reqBac = $bdd->prepare('SELECT IdBac, Tare FROM BAC;');
	$reqBac->execute();

	$reqShip = $bdd->prepare('SELECT IdB, NomB FROM BATEAU;');
	$reqShip->execute();

	$reqDate = $bdd->prepare('SELECT DISTINCT(datePeche) FROM PECHE WHERE datePeche >= CURDATE();');
	$reqDate->execute();

	$reqSpecies = $bdd->prepare('SELECT IdEspece, Nom FROM ESPECE;');
	$reqSpecies->execute();

	$reqPres = $bdd->prepare('SELECT CodePresentation, LibellePresentation FROM PRESENTATION;');
	$reqPres->execute();

	$reqQual = $bdd->prepare('SELECT IdQualite, LibelleQualite FROM QUALITE;');
	$reqQual->execute();

	$reqTail = $bdd->prepare('SELECT IdTaille FROM TAILLE;');
	$reqTail->execute();
?>