<?php 

	$message = '';
	if(isset($_GET['message']) == 1){
		$message = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Impossible de vous identifier</div>';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="../asset/css/verification.css">
  	<style type="text/css">
  		.btn-block+.btn-block {
    		margin-top: 5px;
    		padding: 0px;
		}
  	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1>VERIFICATION</h1>
				<form action="../src/verif.php" method="post">
					<?php echo $message; ?>
					<div class="form-group">
						<input type="text" name="matr" class="form-control" placeholder="matricule..." required>
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-block" type="submit">Check</button>	
						<a href="login.php" class="btn btn-success btn-block">Se connecter</a>	
					</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>