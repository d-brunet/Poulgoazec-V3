<script type="text/javascript">
	function presenting(){
		var code = $('#code').val();
		var name = $('#name').val();
		if(!code || !name){
			alert('Veuillez remplir tous les champs pour pouvoir insérer une présentation!');
		}else{
			$.ajax({
				url:"treatement/add/presenting.php",
				data:"code="+code+"&name="+name,
				type:"POST",
				dataType:"html",
				success:function(result){
					alert(result);
					$("#code").val('');
					$("#name").val('');
				}
			});
		}
	}
	
</script>
<table class="adding">
	<th>Ajout d'une présentation</th>
	<tr><td>Code :</td><td><input type="text" name="code" id="code"></td></tr>
	<tr><td>Libelle :</td><td><input type="text" name="name" id="name"></td></tr>
	<tr><td><button onclick="presenting()">Enregistrer</button></td></tr>
</table>