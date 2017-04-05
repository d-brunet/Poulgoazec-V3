
<script type='text/javascript'>

	function bidding(offer, prize){
		var statut = '<?php echo $_SESSION['statut']; ?>';
		if(offer){
			if(statut == 'Acheteur'){
				if(parseInt(offer) > parseInt(prize)){
					biddingTreatement(offer);
				}else{
					alert("Votre offre est plus petite que l'offre précédente! Veuillez renseigner une offre plus élevée.");
				}
			}else if(statut == 'Crieur'){
				if(parseInt(offer) < parseInt(prize)){
					biddingTreatement(offer);
				}else{
					alert("Le nouveau prix est plus élevé que le prix déjà fixé! Veuillez renseigner un prix moins élevé.");
				}
			}
		}else{
			alert("Vous n'avez pas renseigné d'offre.");
		}
	}

	function biddingTreatement(offer){
		var statut = '<?php echo $_SESSION['statut']; ?>';
		var id = '<?php echo $_SESSION['id']; ?>';
		var numLot = $('#numLot').text();
		$.ajax({
			url:'treatement/bidding.php',
			data:'numLot='+numLot+'&offer='+offer+'&id='+id+'&statut='+statut,
			type:'POST',
			dataType:'html',
			success:function(result){
				if(result){
					alert(result);
				}
				owner();
			}
		});
	}

	function owner(){
		var numLot = $('#numLot').text();
		$.ajax({
			url:'treatement/owner.php',
			data:'numLot='+numLot,
			type:'POST',
			dataType:'html',
			success:function(result){
				res = result.split("|");
				$('#prize').empty().val(res[0]);
				$('#owner').empty().append(res[1]);
				if(res[1] != "Pas d'acheteur"){
					$('#updatePrize').attr('disabled', 'disabled');
					$('#prizeButton').attr('disabled', 'disabled');
					if(res[2]){
						$('#offerButton').attr('disabled', 'disabled');
						$('#offer').attr('disabled', 'disabled');
						$('#end').attr('disabled', 'disabled');
					}
				}
			}
		});
	}

	function end(){
		var numLot = $('#numLot').text();
		var owner = $('#owner').text();
		if(owner != 'Pas d\'acheteur'){
			$.ajax({
				url:'treatement/end.php',
				data:'numLot='+numLot,
				type:'POST',
				dataType:'html',
				success:function(result){
					if(result){
						alert(result);
					}
				}
			})
		}else{
			alert("Ce lot ne possède pas d'acheteur! Vous ne pouvez pas le vendre!");
		}
	}

</script>
<div class="lot">
	<table class="lotinfo">
		<tr>
			<td width="110">Numéro du lot :</td><td id='numLot' name='numLot' width="150"><?php echo $_GET["lot"]; ?></td>
			<td width="110">Bateau :</td><td id='nom_bateau' width="150"><?php if(isset($resLot['NomB'])){echo $resLot['NomB'];} ?></td>
			<td width="110">Espèce :</td><td id='nom_espece' width="150"><?php if(isset($resLot['Nom'])){echo $resLot['Nom'];} ?></td>
		</tr>
		<tr>
			<td width="110">Poid :</td><td id='poid_lot' width="150"><?php if(isset($resLot['poidsBrutLot'])){echo $resLot['poidsBrutLot'];} ?></td>
			<td width="110">Presentation :</td><td id='presentation' width="150"><?php if(isset($resLot['LibellePresentation'])){echo $resLot['LibellePresentation'];} ?></td>
			<td width="110">Taille :</td><td id='taille' width="150"><?php if(isset($resLot['IdTaille'])){echo $resLot['IdTaille'];} ?></td>
		</tr>
	</table>
	<table class="owner">
		<tr>
			<td width="110">offre actuelle :</td><td width="150"><input type='text' name='prize' id='prize' disabled="true" value="" width="150"></td>
		</tr>
	<?php
	if($_GET['view'] <> 'historic'){
	?>
		<tr>
			<td width="110">acheteur actuel :</td><td width="150" name='owner' id='owner' disabled="true" width="150"></td>
		</tr>
	</table>
	<table class="offerT">
	<?php
	if($_SESSION['statut'] == 'Acheteur'){
		echo "<tr name='updateOffer' name='updateOffer'>
		<td width='110'>Votre offre :</td><td width='150'><input type='text' name='offer' id='offer' width='150'></td><td><button name='offerButton' id='offerButton' onclick='bidding(offer.value, prize.value)'>Enchérir</button></td>
		</tr>";
	}else{
		echo "<tr name='updatePrizeT' id='updatePrizeT'>
		<td width='110'>Nouveau prix :</td><td width='150'><input type='text' name='updatePrize' id='updatePrize' width='150'></td><td><button name='prizeButton' id='prizeButton' onclick='bidding(updatePrize.value, prize.value)'>Modifier le prix</button></td>
		</tr>
		<tr><td><button name='end' id='end' onclick='end()'>Fin de l'enchère</button></td></tr>";
	}
	}
	?>
	</table>
</div>

<script>
	owner();
	setInterval(function(){owner();},2000);
</script>