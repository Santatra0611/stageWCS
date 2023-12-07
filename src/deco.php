<?php 

	session_start();
	unset($_SESSION['id']);
	if(session_destroy()){
		header('location:../templates/admin.php');
	}

 ?>