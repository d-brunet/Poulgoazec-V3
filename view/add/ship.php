<script type="text/javascript">
	function ship(){
		var name = $('#name').val();
		var immat = $('#immat').val();
		if(!name || !immat){
			alert('Veuillez remplir tous les champs pour pouvoir insérer un bateau!');
		}else{
			$.ajax({
				url:"treatement/add/ship.php",
				data:"name="+name+"&immat="+immat,
				type:"POST",
				dataType:"html",
				success:function(result){
					alert(result);
					$("#name").val('');
					$("#immat").val('');
				}
			});
		}
	}

</script>
<table class="adding">
	<th>Ajout d'un bateau</th>
	<tr><td>Nom :</td><td><input type="text" name="name" id="name"></td></tr>
	<tr><td>Immatriculation :</td><td><input type="text" name="immat" id="immat"></td></tr>
	<tr><td><button onclick="ship()">Enregistrer</button></td></tr>
</table>
