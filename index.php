<?php 

	$message = '';
	if(isset($_GET['message']) == 1){
		$message = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Impossible de vous identifier</div>';
	}
 ?>
<!DOCTYPE html>
<html lang="en">	
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/index.css">
	<link href="asset/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="asset/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="asset/css/templatemo_style.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		a.index {
  			 transition: padding 0.5s;
}
a.index:hover {
  padding: 10px 0px;
}
.modal-content {
    position: relative;
    background-color: rgb(0 0 0 / 31%);
    background-clip: padding-box;
    border: 1px solid #999;
    border: 1px dotted rgba(0 0 0 );
    border-radius: 6px;
    -webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
    box-shadow: 0 3px 9px rgba(0,0,0,.5);
    outline: 0;
}
input.form-control {
    background-color: rgba(255,255,255,.15);
    color: #fff;
}
	</style>
</head>
<body class="templatemo-bg-image-1" style="margin: 80px auto;">
	<div class="container">
		<div class="col-md-12">		
		 
			<form class="form-horizontal templatemo-login-form-2" role="form" action="" method="post">

				<div class="form-group">

					<h1>WELCOME</h1>
					<?php echo $message; ?>
						<div class="col-xs-12">	
							<a href="templates/admin.php" class="btn btn-primary btn-block index" class="form-control" style="color: #fff;">Admin</a>
						</div>
					</div>
					<p>-OR-</p>
					<div class="form-group">
						<div class="col-xs-12">	
						<a href="#" data-toggle="modal" data-target="#myModal"  class="btn btn-success btn-block index" class="form-control" style="color: #fff;">User</a>
						</div>
					</div>			 	
		      </form>		      		      		      
		</div>
	</div>
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#fff;">Verification</h4>
        </div>
        <div class="modal-body">
        	<p style="color:#fff;font-family: robotic;">Please enter your matricule to check if you can register.</p>
         <form action="src/verif.php" method="post">
        
          <div class="form-group">
            <input type="text" name="matr" class="form-control" placeholder="matricule..." required>
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Check</button>
            <a href="templates/login.php" class="btn btn-warning btn-block" style="padding:0px;">Log in</a>
          </div>
        </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div> -->
      </div>        
    </div>
  </div>
</body>
</html>
