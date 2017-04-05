<script type="text/javascript">
	function height(){
		var height = $('#height').val();
		if(!height){
			alert('Veuillez remplir tous les champs pour pouvoir insérer une taille!');
		}else{
			$.ajax({
				url:"treatement/add/height.php",
				data:"height="+height,
				type:"POST",
				dataType:"html",
				success:function(result){
					alert(result);
					$("#height").val('');
				}
			});
		}
	}
	
</script>
<table class="adding">
	<th>Ajout d'une taille</th>
	<tr><td>Taille :</td><td><input type="number" name="height" id="height"></td></tr>
	<tr><td><button onclick="height()">Enregistrer</button></td></tr>
</table>