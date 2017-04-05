<?php
	$reqMail = $bdd->prepare('SELECT Mail FROM UTILISATEUR WHERE Login = :login;');
	$reqMail->bindParam(":login", $_POST['login'], PDO::PARAM_STR);
	$reqMail->execute();

	$resMail = $reqMail->fetch(PDO::FETCH_ASSOC);

	if(!isset($resMail['Mail'])){
		$message = 'Le login est incorrect!';
		echo '<script type="text/javascript">alert("'.$message.'");</script>';
		header('location:index.php?view=connection&action=forgot');
	}else{

		$cle = md5($_POST['login'].'%'.$resMail['Mail'].'%'.date("Y-m-d H:i:s"));

		require('PHPMailer/PHPMailerAutoload.php');

		$resetPasswordPath = '10.129.180.120/Poulgoazec V3/index.php?view=connection&action=resetPassword&cle='.$cle;
		
		$reqCle = $bdd->prepare('UPDATE UTILISATEUR SET cle = :cle WHERE Login = :login;');
		$reqCle->bindParam(":login", $_POST['login'], PDO::PARAM_STR);
		$reqCle->bindParam(":cle", $cle, PDO::PARAM_STR);
		$reqCle->execute();

		$mail = new PHPMailer();
		$mail->IsSMTP (); 
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAutoTLS = false;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;

		$mail->Username = 'treant.marcel@gmail.com';
		$mail->Password = 'poulgoazec';

		$mail->SetFrom('treant.marcel@gmail.com', 'Treant Marcel');
		$mail->AddReplyTo('treant.marcel@gmail.com', 'Treant Marcel');
		$mail->AddAddress($resMail['Mail'], 'Treant Marcel');

		$mail->Subject = "Réinitialisation du mot de passe";

		$mail->MsgHTML("<html><head></head><body><p>Cliquez sur le lien pour réinitialiser votre mot de passe.</p><br /><a href='".$resetPasswordPath."'>Réinitialiser le mot de passe</a></body></html>");

		if(!$mail->Send()) {
		  echo $mail->ErrorInfo;
		  exit;
		}
		header('location:index.php?view=connection&action=connection');
	}
?>