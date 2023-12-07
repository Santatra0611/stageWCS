<?php 

	include('base.php');
	$bdd->query('delete from nomenclature where id_enclature='.$_GET['id']);
	header('location:../templates/main.php || administrateur.php?page=nomenclature');

 ?>