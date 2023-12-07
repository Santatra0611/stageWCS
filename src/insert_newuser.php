<?php 
	include('base.php');
	$utilisateurs = $bdd->query('select * from user');
	$pass = md5($_POST['mdp']);
	if($utilisateurs->rowCount()>0){
		$utilisateur = $utilisateurs->fetch();
		$bdd->query('update user set nom="'.$_POST['name'].'", prenom="'.$_POST['pre'].'", email="'.$_POST['mail'].'", mdp="'.$pass.'" where id_user='.$_POST['id']);
		header('location:../templates/login.php');
	}

?>
