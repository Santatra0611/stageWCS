<?php 
    
			include('../src/base.php');
      $utilisateurs = $bdd->query('select * from user where role="Utilisateur"');
      $utilisateur = $utilisateurs->fetch();
	$sql = 'select * from user where role="Utilisateur"';
	if(isset($_GET['search']) and !empty($_GET['search'])){
		$sql = 'select * from user where nom like "%'.$_GET['search'].'%" or prenom like "%'.$_GET['search'].'%" or matricule like "%'.$_GET['search'].'%"';
	}
	$resultat = $bdd->query($sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Liste</title>
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../asset/css/templatemo-style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
      .row{
        width: 79%;
        margin: 0!important;
      }
    .templatemo-content {
    margin-top: 0px;
    min-height: 629px;
    padding: 0;
    overflow-x: hidden;
}
</style>
</head>
<body>
	<div class="templatemo-content col-1 light-gray-bg">    
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered table-hover templatemo-user-table">
                <thead style="text-align:center;">
                  <tr>
                    <td><a href="#" class="white-text templatemo-sort-by">#</a></td>
                    <td><a href="#" class="white-text templatemo-sort-by">Name</a></td>
                    <td><a href="#" class="white-text templatemo-sort-by">First Name</a></td>
                    <td><a href="#" class="white-text templatemo-sort-by">Matricule</a></td>
                    <td><a href="#" class="white-text templatemo-sort-by">Email </a></td>
                    <td>Action</td>
                  </tr>
          </thead>
          <tbody style="text-align:center;">
            <?php 
            while($user = $resultat->fetch()){
              echo'
                <tr>
                  <td>'.$user['id_user'].'</td>
                  <td>'.$user['nom'].'</td>
                  <td>'.$user['prenom'].'</td>
                  <td>'.$user['matricule'].'</td>
                  <td>'.$user['email'].'</td>
                  <td>
                    <a href="modif.php?id='.$user['id_user'].'" class="btn btn-success">Edit</a>&nbsp;-OR-&nbsp;
                    <a href="../src/supp.php?id='.$user['id_user'].'" class="btn btn-danger">Delete</a>
                  </td>
                  
                </tr>
              ';
            }
             ?>                   
                </tbody>
              </table>   
            </div>                          
          </div>                            
<!-- <footer class="text-right">
            <p style="font-size: 1em;">Copyright &copy; 2023 Company Name
            | Design: Template Mo</p>
          </footer>   -->       
        </div>
      </div>
    </div>
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>