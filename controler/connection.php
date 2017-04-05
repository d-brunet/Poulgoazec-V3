<?php
	if(!isset($_GET['action'])){
		$action = 'connection';
	}else{
		$action = $_GET['action'];
	}

	switch($action){
		case 'check':
			$req_check = $bdd->prepare('SELECT Id, statut FROM UTILISATEUR WHERE Login = :login AND Pwd = :pwd;');
			$req_check->bindParam(':login', $_POST['login'], PDO::PARAM_STR);
			$req_check->bindParam(':pwd', md5($_POST['login'].'%'.$_POST['password']), PDO::PARAM_STR);
			$req_check->execute();

			$res_check = $req_check->fetch(PDO::FETCH_ASSOC);

			if(isset($res_check)){
				session_start();
				$_SESSION['login'] = $_POST['login'];
				$_SESSION['id'] = $res_check['Id'];
				$_SESSION['statut'] = $res_check['statut'];

				header('location:index.php?view=home');
			}else{
				header('location:index.php?view=connection');
			}
			break;
		case 'deconnection':
			$_SESSION['login'] = Null;
			$_SESSION['id'] = Null;
			$_SESSION['statut'] = Null;
			session_destroy();

			header('location:index.php?view=connection');
			break;
		case 'forgot':
			include('view/forgotPassword.php');
			break;
		case 'sendMail':
			echo'pass';
			include('treatement/forgotPassword.php');
			break;
		case 'resetPassword':
			include('view/resetPassword.php');
			break;
		case 'reset':
			include('treatement/resetPassword.php');
			break;
		default:
			include('view/connection.php');
			break;
	}
?>