<?php
	$reqShip = $bdd->prepare('SELECT IdB, NomB FROM BATEAU;');
	$reqShip->execute();
?>