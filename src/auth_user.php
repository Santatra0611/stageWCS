<?php 

	include('base.php');

	if(!empty($_POST['matr']) and !empty($_POST['mail'])){
		 	$bdd->query('insert into user(matricule,email)values("'.$_POST['matr'].'","'.$_POST['mail'].'","Utilisateur")');
		 	header('location:../templates/administrateur.php?page=liste');
		 }
	

	

 ?>