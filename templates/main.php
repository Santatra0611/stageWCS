<?php 
	
	session_start();
	if(isset($_SESSION['user'])){
	include('../src/base.php');
	$users = $bdd->query('select * from user where id_user='.$_SESSION['user']);
	$user = $users->fetch();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Main</title>
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="../asset/css/templatemo-style.css" rel="stylesheet">
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
	 <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <nav class="templatemo-left-nav">          
          <ul style="text-align:center; font-size: 20px;">
              <li><a href="#" class="active"><i class="fa fa-user">&nbsp;&nbsp;<?php echo $user['prenom']?></i><span class="fa fa-ellipsis-v">
              </span>
              </a></li>         
          </ul>
        </nav> 
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>       
            <li><a href="main.php?page=nomenclature"><i class="fa fa-sliders fa-fw"></i>Nomenclatures</a></li>   
            <li><a href="main.php?page=parametre"><i class="fa fa-cog fa-fw"></i>Parametres</a></li>

            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-out fa-fa"></i>Sign Out</a></li>
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
          <a href="../src/deco_user.php" type="button" class="btn btn-default">Yes</a>
        </div>
      </div>
    </div>
  </div>
        <div class="row">
    <?php 
    $content = 'nomenclature';
    if(isset($_GET['page'])){
      $content = $_GET['page'];
      }
      include($content. '.php');
     ?>
  </div>
       <script src="../js/jquery-1.11.2.min.js"></script>
       <script type="text/javascript" src="../js/templatemo-script.js"></script>
</body>
</html>
<?php 
	}else{
		header('location:login.php');
	}
 ?>