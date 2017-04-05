<script type="text/javascript">
	function checkNewPassword(){
		var pwd = $('#password').val();
		var pwdCheck = $('#passwordCheck').val();

		if(pwd === pwdCheck){
			return true;
		}else{
			alert("Les deux mots de passe ne sont pas les mêmes!")
			return false;
		}
	}


</script>


<form method='POST' onSubmit='return checkNewPassword();' action='index.php?view=connection&action=reset&cle=<?php echo $_GET['cle']; ?>'>
	<table class='connectionTable'>
		<tr>
			<td width="150"><label id='passwordLabel'>Mot de passe</label></td>
			<td width="150"><input type='password' id='password' name='password'></td>
		</tr>
		<tr>
			<td width="150"><label id='passwordLabelCheck'>Confirmer le nouveau mot de passe</label></td>
			<td width="150"><input type='password' id='passwordCheck' name='passwordCheck'></td>
		</tr>
		<tr><td><button type='submit'>Envoyer l'e-mail</button></td></tr>
	</table>
</form>