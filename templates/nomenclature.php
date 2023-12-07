<?php 

	include('../src/base.php');
	$nomenclatures = $bdd->query('select * from nomenclature');

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/bootstrap/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/templatemo-style.css">
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
}</style>
</head>
<body>
<div class="templatemo-content col-1 light-gray-bg">    
  <div class="templatemo-content-container">

    <div class="templatemo-content-widget no-padding">
      <div class="panel panel-default table-responsive">
				<table class="table table-striped table-bordered table-hover templatemo-user-table">
					<thead>
						<tr>
							  <td><a href="#" class="white-text templatemo-sort-by">Order</a></td>
                <td><a href="#" class="white-text templatemo-sort-by">Category</a></td>
                <td><a href="#" class="white-text templatemo-sort-by">Article</a></td>
                <td><a href="#" class="white-text templatemo-sort-by">Description</a></td>
                <td><a href="#" class="white-text templatemo-sort-by">Type </a></td>
                <td><a href="#" class="white-text templatemo-sort-by">Note </a></td>
                <td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php 

							while($nomenclature = $nomenclatures->fetch()) {
								echo '
								<tr class="table-success">
									<td>'.$nomenclature['id_enclature'].'</td>
									<td>'.$nomenclature['categorie'].'</td>
									<td>'.$nomenclature['article'].'</td>
									<td>'.$nomenclature['description'].'</td>
									<td>'.$nomenclature['type'].'</td>
									<td>'.$nomenclature['note'].'</td>
									<td><a href="#" class="btn btn-success">Edit</a>
											<a href="#" class="btn btn-danger">Delete</a>
									</td>
						</tr>';
							}

						 ?>

					</tbody>
				</table>	
			</div>	
		</div>	
	</div>	
</div>	
</body>
</html>