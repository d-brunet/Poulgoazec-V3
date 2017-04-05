<?php
	$reqLot = $bdd->prepare('SELECT NumLot, IdB, datePeche, IdTaille, Nom FROM LOT L, ESPECE E WHERE L.IdEspece = E.IdEspece AND L.Id IS NULL AND dateEnchere >= CURDATE() ORDER BY datePeche, IdB, NumLot;');
	$reqLot->execute();
?>
<table class="listLot">
	<th width="200">Numéro du lot</th><th width="200">Espèce</th><th width="100">Taille</th><th width="200">Informations</th>
	<?php
		while($resLot = $reqLot->fetch(PDO::FETCH_ASSOC)){
			echo '<tr>
					<td width="200">'.$resLot['datePeche'].'|'.$resLot['IdB'].'|'.$resLot['NumLot'].'</td>
					<td width="200">'.$resLot['Nom'].'</td>
					<td width="100">'.$resLot['IdTaille'].'</td>
					<td width="200"><a href="index.php?view=lot&action=lot&lot='.$resLot['datePeche'].'|'.$resLot['IdB'].'|'.$resLot['NumLot'].'">Voir le lot</a></td>
				</tr>';
		}
	?>
</table>