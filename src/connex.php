<?php 

	include('base.php');

	if(!empty($_POST['mail']) and !empty($_POST['mdp'])){
		$pass = md5($_POST['mdp']);
		$email = addslashes($email);
		$users = $bdd->query('select * from user where email="'.$_POST['mail'].'" and mdp="'.$pass.'"');
			if($users->rowCount()>0){
				$user = $users->fetch();
				session_start();
				$_SESSION['user'] = $user['id_user'];
				if($user['role'] == "Utilisateur"){
					header('location:../templates/main.php');
				}else{
					header('location:../templates/login.php?message=2');
				}
			}
				else{
					header('location:../templates/login.php?message=1');
				}
	}

 ?>