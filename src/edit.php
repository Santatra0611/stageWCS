<?php 

	include('base.php');
	if(!empty($_POST['matr']) and !empty($_POST['mail'])){

		$bdd->query('update user set matricule="'.$_POST['matr'].'", email="'.$_POST['mail'].'" where id_user='.$_POST['id']);
		header('location:../templates/administrateur.php?page=liste');

	}
	

 ?>