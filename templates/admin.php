<?php 
	
	$message = '';
	if(isset($_GET['message'])){
		if($_GET['message'] == 1){
			$message = '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Check your Email or Password</div>';
		}elseif ($_GET['message'] == 2) {
			$message = '<div class="alert alert-info"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>You arn\'t authorized to connect</div>';
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Log in</title>
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/font-awesome.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="../asset/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../asset/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="../asset/css/templatemo_style.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.form-control{
			border-radius: 30px;
		}
		#lien{
			text-decoration: none;
		}
		span.fa.fa-info-circle.admin {
    		animation: none;
		}
	</style>
</head>
<body class="templatemo-bg-image-1">
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="../src/insert_user.php" method="post">
				<div class="row">
					<div class="col-md-12">
						<h1>Welcome Back Adm<span class="fa fa-info-circle admin"></span>n</h1>
						<?php echo $message; ?>
					</div>
				</div>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
				        <div class="form-group">
				          <div class="col-md-12">		          	
				            <label class="control-label">Email</label>
				            <div class="templatemo-input-icon-container">
				            	<i class="fa fa-envelope-o"></i>
				            	<input type="email" class="form-control" name="mail" id="email" placeholder="Email@address.com" required>
				            </div>		            		            		            
				          </div>              
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <label for="password" class="control-label">Password</label>
				            <div class="templatemo-input-icon-container">
				            	<i class="fa fa-key"></i>
				            	<input type="password" name="mdp" class="form-control pass" id="password" placeholder=" Enter your Password" required>
				            	<i class="fa fa-eye mdp"></i>
				            </div>
				          </div>
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <div class="checkbox">
				                <label>
				                  <input type="checkbox"> Remember me
				                </label>
				            </div>
				          </div>
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <input type="submit" value="LOG IN" class="btn btn-warning"><br>

				           <a href="info_admin.php" onclick="hideButton(this)">Create account</a> 
				       	</div>
				        </div>
					</div>
					<div class="templatemo-other-signin col-md-6">
						<img src="../asset/image/wildlife-conservation-society.png" class="wcs">
					</div>   
				</div>				 	
		      </form>
		       <div class="text-center">
		      	<a href="../index.php" class="templatemo-create-new">BACK<i class="fa fa-arrow-circle-o-left"></i></a>
		      </div>		      		      		      
		</div>
	</div>
	<script src="../js/script.js"></script>
	 <script>
	 		function hideButton(x)
		{
			x.style.display = "none";
		}		
	</script> 
	<script>
		let input = document.querySelector('.templatemo-input-icon-container input.form-control.pass');
		let showBtn = document.querySelector('i.fa.fa-eye.mdp');
		showBtn.onclick = function(){
			if(input.type === "password"){
				input.type = "text";
				showBtn.classList.add('active');			}
			else{
				input.type = "password";
				showBtn.classList.remove('active'); 
			}
		} 
	</script>
</body>
</html>


