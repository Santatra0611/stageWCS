<?php 

	$message = '';
	if(isset($_GET['message'])){
		if($_GET['message'] == 1){
			$message = '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Check your Email or Password.</div>';
		}elseif ($_GET['message'] == 2) {
			$message = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>You arn\'t authorized to connect.</div>';
		}
	}
 ?>
<!DOCTYPE html>
<head>
	<title>Login</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
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
	</style>	
</head>
<body class="templatemo-bg-image-1">
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="../src/connex.php" method="post">
				<div class="row">
					<div class="col-md-12">
						<h1>L<span class="fa fa-spinner"></span>gin</h1>
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
				                  <input type="checkbox">Remember me
				                </label>
				            </div>
				          </div>
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <input type="submit" value="LOG IN" class="btn btn-warning">
				          </div>
				        </div>
					</div>
					<div class="templatemo-other-signin col-md-6">
						<img src="../asset/image/wildlife-conservation-society.png" class="wcs">
					</div>   
				</div>				 	
		      </form>
		       <div class="text-center">
		      	<a href="../index.php" class="templatemo-create-new"><i class="fa fa-arrow-circle-o-left"></i>BACK</a>	
		      </div>		      		      		      
		</div>
	</div>
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