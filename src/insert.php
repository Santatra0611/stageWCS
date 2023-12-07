<?php 
	include('base.php');
	$matricules = $bdd->query('select * from user where matricule="'.$_POST['matr'].'"');
	if($matricules->rowCount()>0){
		header('location:../templates/info_admin.php?message=1');
	}
	elseif(!empty($_POST['name']) and !empty($_POST['pre']) and !empty($_POST['matr']) and !empty($_POST['mail']) and !empty($_POST['mdp'])){
		$pass = md5($_POST['mdp']);  
		$bdd->query('insert into user(nom,prenom,matricule,email,mdp,role)values("'.$_POST['name'].'","'.$_POST['pre'].'","'.$_POST['matr'].'","'.$_POST['mail'].'","'.$pass.'","Administrateur")');
			header('location:../templates/admin.php');	
	}
		

?>