<?php 

	include('base.php');

	if(!empty($_POST['mail']) and!empty($_POST['mdp'])){
		$pass = md5($_POST['mdp']); 
		$admins = $bdd->query('select * from user where email="'.$_POST['mail'].'" and mdp="'.$pass.'"');
		if($admins->rowCount()>0){
			$admin = $admins->fetch();
			session_start();
			$_SESSION['admin'] = $admin['id_user'];
			if($admin['role'] == "Administrateur"){
				header('location:../templates/administrateur.php');	
			}
			else if($admin['role'] == "Utilisateur"){
				header('location:../templates/admin.php?message=2');
			}
		}else{
				header('location:../templates/admin.php?message=1');
			}

	}

 ?>