<form name='connection' method='POST' action='index.php?view=connection&action=check'>
	<table class='connectionTable' id='connectionTable'>
		<tr><td>
			<label id='login_label'>login</label>
		</td><td>
			<input type='text' id='login' name='login'>
		</td></tr><tr><td>
			<label id='password_label'>mot de passe</label>
		</td><td>
			<input type='password' id='password' name='password'>
		</td></tr>
		<tr><td><button type='submit'>Connexion</button></td>
		<td><a href="index.php?view=connection&action=forgot">Mot de passe oublié?</a></td></tr>
	</table>
</form>