<?php 

	$message = '';
	if(isset($_GET['message']) == 2){
		$message = '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>This matricule has already an account</div>';
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/new_user.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/templatemo_style.css">
</head>
<body class="templatemo-bg-image-1">
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-contact-form-1" role="form" action="../src/insert_newuser.php" method="post">
				<div class="form-group">
					<div class="col-md-12">
						<h1 style="width:36%;margin: 0 auto;" class="margin-bottom-15">User Registration</h1>	
						<?php echo $message; ?>
					</div>
				</div>			 	
		        <div class="form-group">
		          <div class="col-md-12">		          	
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-user"></i>
		            	<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
		            	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
		            </div>		            		            		            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">		            
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-user"></i>
		            	<input type="text" class="form-control" name="pre" id="email" placeholder="Enter your first and last name" required>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-envelope"></i>
		            	<input type="email" class="form-control" name="mail" id="subject" placeholder="Email@address.com" required>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <div class="templatemo-input-icon-container">
		            	<i class="fa fa-key"></i>
		            	<input type="password" class="form-control pass" name="mdp" id="subject" placeholder="Enter password" required>
		            	<i class="fa fa-eye word"></i>
		            </div>
		          </div>
		        </div>
		       
		        <div class="form-group">
		          <div class="col-md-12">
		          	<a href="login.php">Log in</a>
		            <input type="submit" value="Create account" class="btn btn-primary pull-right"> 
		          </div>
		        </div>		    	
		      </form>	
		       <div class="text-center">
		      	<a href="admin.php" class="templatemo-create-new">BACK<i class="fa fa-arrow-circle-o-left"></i></a>	
		      </div>		      	      
		</div>
	</div>
	<script src="../js/show-mdp.js"></script>
</body>
</html>