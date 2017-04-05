<script type="text/javascript">
	function lot(){
		var date = $('#date').val();
		var nameShip = $('#nameShip').val();
		var codeEspece = $('#codeEspece').val();
		var codePresenting = $('#codePresenting').val();
		var codeQuality = $('#codeQuality').val();
		var taille = $('#taille').val();
		var tare = $('#tare').val();
		var prize = $('#prize').val();
		var poid = $('#poid').val();
		if(!date || !nameShip || !codeEspece || !codePresenting || !codeQuality || !taille || !tare || !prize || !poid){
			alert('Veuillez remplir tous les champs pour pouvoir insérer un bac!');
		}else{
			$.ajax({
				url:"treatement/add/lot.php",
				data:"date="+date+"&nameShip="+nameShip+"&codeEspece="+codeEspece+"&codePresenting="+codePresenting+"&codeQuality="+codeQuality+"&taille="+taille+"&tare="+tare+"&prize="+prize+"&poid="+poid,
				type:"POST",
				dataType:"html",
				success:function(result){
					alert(result);
					$("#prize").val('');
					$("#poid").val('');
				}
			});
		}
	}
	
</script>

<table class="adding">
	<th>Ajout d'un lot</th>
	<tr><td>Date :</td>
		<td>
			<select name="date" id="date">
			<?php
				while($resDate = $reqDate->fetch(PDO::FETCH_ASSOC)){
					echo '<option value="'.$resDate['datePeche'].'">'.$resDate['datePeche'].'</option>';
				}
			?>
			</select>
		</td>
	</tr>
	<tr><td>Bateau :</td>
		<td>
			<select name="nameShip" id="nameShip">
			<?php
				while($resShip = $reqShip->fetch(PDO::FETCH_ASSOC)){
					echo '<option value="'.$resShip['IdB'].'">'.$resShip['NomB'].'</option>';
				}
			?>
			</select>
		</td>
	</tr>
	<tr><td>Espèce :</td>
		<td>
			<select name="codeEspece" id="codeEspece">
			<?php
				while($resSpecies = $reqSpecies->fetch(PDO::FETCH_ASSOC)){
					echo '<option value="'.$resSpecies['IdEspece'].'">'.$resSpecies['Nom'].'</option>';
				}
			?>
			</select>
		</td>
	</tr>
	<tr><td>Présentation :</td>
		<td>
			<select name="codePresenting" id="codePresenting">
			<?php
				while($resPres = $reqPres->fetch(PDO::FETCH_ASSOC)){
					echo '<option value="'.$resPres['CodePresentation'].'">'.$resPres['LibellePresentation'].'</option>';
				}
			?>
			</select>
		</td>
	</tr>
	<tr><td>Qualitée :</td>
		<td>
			<select name="codeQuality" id="codeQuality">
			<?php
				while($resQual = $reqQual->fetch(PDO::FETCH_ASSOC)){
					echo '<option value="'.$resQual['IdQualite'].'">'.$resQual['LibelleQualite'].'</option>';
				}
			?>
			</select>
		</td>
	</tr>
	<tr><td>Taille :</td>
		<td>
			<select name="taille" id="taille">
			<?php
				while($resTail = $reqTail->fetch(PDO::FETCH_ASSOC)){
					echo '<option value="'.$resTail['IdTaille'].'">'.$resTail['IdTaille'].'</option>';
				}
			?>
			</select>
		</td>
	</tr>
	<tr><td>Tare du bac :</td>
		<td>
			<select name="tare" id="tare">
			<?php
				while($resBac = $reqBac->fetch(PDO::FETCH_ASSOC)){
					echo '<option value="'.$resBac['IdBac'].'">'.$resBac['Tare'].'</option>';
				}
			?>
			</select>
		</td>
	</tr>
	<tr><td>Prix de départ :</td><td><input type="number" name="prize" id="prize"></td></tr>
	<tr><td>Poid brut du lot :</td><td><input type="number" name="poid" id="poid"></td></tr>
	<tr><td><button onclick="lot()">Enregistrer</button></td></tr>
</table>