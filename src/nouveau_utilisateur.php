<?php 

	include('base.php');
	$utilisateurs = $bdd->query('select * from user where matricule="'.$_POST['matr'].'"');
	if($utilisateurs->rowCount()>0){
			header('location:../templates/administrateur.php?page=new_utilisateur&message=1');
	}elseif(!empty($_POST['matr']) and !empty($_POST['role'])){
		$bdd->query('insert into user(matricule,role)values("'.$_POST['matr'].'","'.$_POST['role'].'")');
		header('location:../templates/administrateur.php?page=liste');
	}

 ?>