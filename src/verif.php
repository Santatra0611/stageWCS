<?php 

	include('base.php');
	$utilisateurs = $bdd->query('select * from user where matricule="'.$_POST['matr'].'"');
	if($utilisateurs->rowCount()>0){
		$utilisateur = $utilisateurs->fetch();
		if(empty($utilisateur['nom']) and empty($utilisateur['prenom']) and empty($utilisateur['email']) and empty($utilisateur['mdp']) ){
			$id = $utilisateur['id_user'];
			$matricule = $_POST['matr'];
			header('location:../templates/new_user.php?id='.$id.'');
		}else{
			header('location:../templates/login.php');
	}
	}else{
		header('location:../index.php?message=1');
	}
 ?>