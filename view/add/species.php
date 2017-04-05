<script type="text/javascript">
	function species(){
		var name = $('#name').val();
		var nameSci = $('#nameSci').val();
		var nameCom = $('#nameCom').val();
		if(!name || !nameSci || !nameCom){
			alert('Veuillez remplir tous les champs pour pouvoir insérer une espsèce!');
		}else{
			$.ajax({
				url:"treatement/add/species.php",
				data:"name="+name+"&nameCom="+nameSci+"&nameCom="+nameCom,
				type:"POST",
				dataType:"html",
				success:function(result){
					alert(result);
					$("#name").val('');
					$("#nameSci").val('');
					$("#nameCom").val('');
				}
			});
		}
	}

</script>
<table class="adding">
	<th>Ajout d'une espèce</th>
	<tr><td>Nom :</td><td><input type="text" name="name" id="name"></td></tr>
	<tr><td>Nom scientifique :</td><td><input type="text" name="nameSci" id="nameSci"></td></tr>
	<tr><td>Nom Commun :</td><td><input type="text" name="nameCom" id="nameCom"></td></tr>
	<tr><td><button onclick="species()">Enregistrer</button></td></tr>
</table>