<?php
	$reqLogin = $bdd->prepare('SELECT Login FROM UTILISATEUR WHERE cle = :cle;');
	$reqLogin->bindParam(":cle", $_GET['cle'], PDO::PARAM_STR);
	$reqLogin->execute();

	$resLogin = $reqLogin->fetch(PDO::FETCH_ASSOC);

	if(!isset($resLogin['Login'])){
		$message = 'La clée de réinitialisation n\'est pas valide!';
		echo '<script type="text/javascript">alert("'.$message.'");</script>';
	}else{
		$password = md5($resLogin['Login'].'%'.$_POST['password']);

		$reqReset = $bdd->prepare('UPDATE UTILISATEUR SET Pwd = :password, cle = NULL WHERE cle = :cle;');
		$reqReset->bindParam(":cle", $_GET['cle'], PDO::PARAM_STR);
		$reqReset->bindParam(":password", $password, PDO::PARAM_STR);
		$reqReset->execute();
	}
		header('location:index.php?view=connection&action=connection');


?>