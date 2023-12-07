<?php 

	$message = '';
	if(isset($_GET['message'])){
		if($_GET['message'] == 1){
			$message = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>This matricule has already an account</div>';
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../asset/css/templatemo-style.css">
	<style type="text/css">
		.templatemo-content {
    margin-top: 0px;
    min-height: 629px;
    padding: 0;
    overflow-x: hidden;
  }
		.panel {
    border-radius: 10px;
    padding: 20px;
}
            .row{
        width: 79%;
        margin: 0!important;
      }
	</style>
	<title></title>
</head>
<body>
<div class="templatemo-content col-1 light-gray-bg">
        
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
               <form class="contenu" action="../src/nouveau_utilisateur.php" method="post">
                  <h1 style="text-align:center;">INSERER ICI</h1>
                    <?php echo $message; ?>
                  <div class="form-group">
                    <input type="text" name="matr" class="form-control" placeholder="Matricule..." required>
                  </div>
                  <div class="form-group">
                    <label>Role:</label>
                    <select class="form-control" name="role">
                        <option>...</option>
                        <option>Utilisateur</option>
                    </select>
                  </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Enregistrer</button>
          </div>
        </form>    
            </div>                          
          </div>                  
        </div>
      </div>
    </div>
</body>
</html>