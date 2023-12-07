<?php 

	include('base.php');

	$bdd->query('delete from user where id_user='.$_GET['id']);
	header('location:../templates/administrateur.php?page=liste');

 ?>