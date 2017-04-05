<script type="text/javascript">
	function bac(){
		var code = $('#code').val();
		var tare = $('#tare').val();
		alert(code);
		if(!code || !tare){
			alert('Veuillez remplir tous les champs pour pouvoir insérer un bac!');
		}else{
			$.ajax({
				url:"treatement/add/bac.php",
				data:"code="+code+"&tare="+tare,
				type:"POST",
				dataType:"html",
				success:function(result){
					alert(result);
					$("#code").val('');
					$("#tare").val('');
				}
			});
		}
	}
	
</script>
<table class="adding">
	<th>Ajout d'un bac</th>
	<tr><td>Code :</td><td><input type="text" name="code" id="code"></td></tr>
	<tr><td>Tare :</td><td><input type="number" name="tare" id="tare"></td></tr>
	<tr><td><button onclick="bac()">Enregistrer</button></td></tr>
</table>
