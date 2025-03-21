
	<?php
		require('../utilisateurs/ma_session.php');
	?>


<?php
	include("../fonctions.php");
	
	require('../connexion.php');

$req = $pdo->query("SELECT * from epreuves");

$resultat = $req->fetchAll();
									
?>
<!DOCTPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Les Epreuves </title> 
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monStyle.css">
		<script src="../js/jquery-1.10.2.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		
	</head>
		
	<body>
	
		<?php include('../menu.php'); ?>
		<br><br>
		<div class="container">

			<h1 class="text-center"> Les Epreuves </h1>
			<div class="panel panel-primary">
				<div class="panel-heading">Rechecher une epreuve</div>
				<div class="panel-body">

<!-- ******************** Début Formulaire de recherche ***************** -->
					<form class="form-inline" >
				
					<label> Année : </label>
						
						<select class="form-control" 
								name="annee_scolaire"
								onChange="this.form.submit();">
                        <?php for($i=1;$i<=20;$i++){
                          $annee = 2000 + $i;      
                        ?>
                            <option><?= $annee  ?></option>
                        <?php
                        }
                        ?>								
						</select>

						<label> Concours: </label>								
							<select class="form-control" name="id_filiere"
										onChange="this.form.submit();"	>
								<option>CQP</option>
                                <option>DQP</option>
                                <option>Ecole</option>													
                            </select>
							
							
						<button class="btn btn-primary"> 
							<span class="fa fa-search"></span>
						</button>
					</form>
<!-- ******************** Fin Formulaire de recherche ***************** -->

			
				</div>
			</div>
			
			<table class="table table-striped">
				<thead>
					<tr>
						<th> Année </th> <th> Nom </th> <th> Concours </th> 
						<?php if($_SESSION['user']['role']=="Directeur"){?>
							<th> Actions</th>
						<?php } ?>
						
						
					</tr>
				</thead>
				
				<tbody>
			
			<?php foreach( $resultat  as $epreuve){?>
			
			<tr>
				
				
                <td><?php echo $epreuve['annee'] ?> </td>
                <td><?php echo $epreuve['nom'] ?> </td>
                <td><?php echo $epreuve['concours'] ?> </td>
				
				<?php if($_SESSION['user']['role']=="Directeur"){?>
					<td>
						<a class="btn btn-success btn-edit-delete"
							href="edit_sujet.php
								?id_epreuve=<?php echo $epreuve['id_epreuve'] ?>
								"
								 > 
								<span class="fa fa-edit"></span>
						</a>
					
						<a onclick="return confirm('Etes vous sur de vouloir supprimer cette epreuve')"
						
						class="btn btn-danger btn-edit-delete"
						href="suprimer_sujet.php
								?id_epreuve	=<?php echo $epreuve['id_epreuve'] ?>
								" > 
							<span class="fa fa-trash"></span>
						</a>
					</td>			
				<?php } ?>
				
				
				
			</tr>
		<?php } ?>
		
			</table>
				</tbody>
				
				<?php if($_SESSION['user']['role']=="Directeur"){?>
					<a class="btn btn-primary" href="ajouter_sujet.php">
						<span class="fa fa-plus"></span> 
						Ajouter une nouvelle epreuve
					</a>			
				<?php } ?>
				
				
		</div>
	</body>
</html>




