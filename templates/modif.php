<?php 

	include('../src/base.php');
	$uses = $bdd->query('select * from user where role="Utilisateur" and id_user='.$_GET['id']);
	$use = $uses->fetch();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/font-awesome.min.css">
	<link href="../asset/css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1>MODIFICATION</h1>

				<form action="../src/edit.php" method="post">
					<div class="form-group">
						<label>Matricule</label>
					<input type="text" name="matr" class="form-control" value="<?php echo $use['matricule'] ?>">
					<input type="hidden" name="id" class="form-control" value="<?php echo $use['id_user'] ?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="mail" name="mail" class="form-control" value="<?php echo $use['email'] ?>">
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Enregistrer</button>
					</div>
				</form>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
	<div class="text-center">
		      	<a href="administrateur.php" class="templatemo-create-new">BACK<i class="fa fa-arrow-circle-o-left"></i></a>	
		      </div>

</body>
</html>