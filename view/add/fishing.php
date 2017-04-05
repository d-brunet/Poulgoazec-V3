<script type="text/javascript">
	function fishing(){
		var date = $('#date').val();
		var ship = $('#ship').val();
		if(!date || !ship){
			alert('Veuillez remplir tous les champs pour pouvoir insérer une date de pêche!');
		}else{
			$.ajax({
				url:"treatement/add/fishing.php",
				data:"date="+date+"&ship="+ship,
				type:"POST",
				dataType:"html",
				success:function(result){
					alert(result);
					$("#date").val('');
					$("#ship").val('');
				}
			});
		}
	}
	
</script>
<table class="adding">
	<th>Ajout d'une date de pêche</th>
	<tr><td>Date :</td><td><input type="date" name="date" id="date" min="<?php echo date("Y-m-d"); ?>"></td></tr>
	<tr><td>Bateau :</td>
		<td>
			<select name="ship" id="ship">
			<?php
				while($resShip = $reqShip->fetch(PDO::FETCH_ASSOC)){
					echo '<option value="'.$resShip['IdB'].'">'.$resShip['NomB'].'</option>';
				}
			?>
			</select>
		</td>
	</tr>
	<tr><td><button onclick="fishing()">Enregistrer</button></td></tr>
</table>