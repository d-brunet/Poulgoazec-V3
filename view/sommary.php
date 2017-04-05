<table class='sommary'>
	<tr>
		<td width="200"><a href='index.php?view=home'>Accueil</a></td>
		<td width="200"><a href='index.php?view=lot'>Lots</a></td>
		<?php
			if($_SESSION['statut'] == 'Crieur'){
				echo "<td width='200'><a href='index.php?view=gestion&action=index'>Gestion</a></td>";
			}else{
				echo "<td width='200'><a href='index.php?view=historic&action=index'>Historique</a></td>";
			}
		?>
		<td width="200"><a href='index.php?view=connection&action=deconnection'>Déconnexion</a></td>
	</tr>
</table>
