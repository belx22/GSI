
<?php

	$id		=$_SESSION['user']['id_utilisateur'];
	$login	=$_SESSION['user']['login'];
	$role	=$_SESSION['user']['role'];

?>

	<nav class="navbar navbar-inverse navbar-fixed-top">

		<div class="navbar-header">
				<a  class="navbar-brand" href="../../index.php">
					<span class="fa fa-id-card"></span>
						Gestion 
				</a>
		</div>

		<ul class="nav navbar-nav">
			<li> 
				<a href="../epreuves/sujet.php">       
					<span class="fa fa-product-hunt"></span> 
					Les Epreuves 
				</a> 
			</li>
			
			<?php if($role=="Directeur"){?>
				<li>
					<a href="../utilisateurs/page_les_utilisateurs.php">   
						<span class="fa fa-users"></span> 
						Les Utilisateurs 
					</a>
				</li>
			<?php } ?>	
			
		</ul>

		<ul class="nav navbar-nav navbar-right">
		
			<li class="dropdown">
			
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<span class="fa fa-user-circle-o"></span>&nbsp
						<?php echo $login ?>
					<span class="caret"></span>
				</a>
				
				<ul class="dropdown-menu">
					<li>
						<a href="../utilisateurs/page_edit_utilisateur.php?id=<?php echo $id ?>">
							<span class="fa fa-vcard-o"></span>&nbsp
							Mon Compte
						</a>
					</li>
					<li>
						<a href="../utilisateurs/seDeconnecter.php">
							<span class="fa fa-sign-out"></span>&nbsp
							Se déconnecter
						</a>
					</li>
				</ul>
				
			</li>
				
		</ul>


	</nav>

