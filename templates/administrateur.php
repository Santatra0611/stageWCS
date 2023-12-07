<?php 
    include('../src/base.php');
	session_start();
	if(isset($_SESSION['admin'])){
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Administrator home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="../asset/bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="../asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/css/templatemo-style.css" rel="stylesheet">
    <style type="text/css">
      .row{
        width: 79%;
        margin: 0!important;
      }
    </style>
  </head>
  <body>  
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"> </div>
            <h1>Visual Admin</h1>	
        </header>
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="search" id="srch-term">   
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="administrateur.php?page=liste" class="active" data-toggle="tooltip" title="Manage"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>            
            <li><a href="administrateur.php?page=new_utilisateur" data-toggle="tooltip" title="Insert new Users!"><i class="fa fa-plus-circle fa-fw"></i>New Users</a></li>
            <li><a href="administrateur.php?page=nomenclature" data-toggle="tooltip" title="Nomenclatures"><i class="fa fa-sliders fa-fw"></i>Nomenclatures</a></li>            
            <li><a href="administrateur.php?page=parametre" data-toggle="tooltip" title="Parametres"><i class="fa fa-cog fa-fw"></i>Parametres</a></li>                          
            <li><a href="#" data-toggle="modal" data-target="#myModal" ><i class="fa fa-sign-out fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Log out?</h4>
        </div>
        <div class="modal-body">
          <p>Disconnected your account ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
          <a href="../src/deco.php" type="button" class="btn btn-default">Yes</a>
        </div>
      </div>      
    </div>
  </div>
  
	<div class="row">
		<?php 
		$content = 'liste';
		if(isset($_GET['page'])){
			$content = $_GET['page'];
			}
			include($content. '.php');
		 ?>
	</div> 
  <script src="../js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../js/templatemo-script.js"></script>
    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
      });
</script>
</body>
</html>
<?php 

	}else{
		header('location:admin.php');
	}

 ?>