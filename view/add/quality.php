<script type="text/javascript">
	function quality(){
		var code = $('#code').val();
		var name = $('#name').val();
		if(!code || !name){
			alert('Veuillez remplir tous les champs pour pouvoir insérer une qualité!');
		}else{
			$.ajax({
				url:"treatement/add/quality.php",
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
	<th>Ajout d'une qualité</th>
	<tr><td>Code :</td><td><input type="text" name="code" id="code"></td></tr>
	<tr><td>Libelle :</td><td><input type="text" name="name" id="name"></td></tr>
	<tr><td><button onclick="quality()">Enregistrer</button></td></tr>
</table>