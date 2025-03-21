<?php

require "../bd/bd.php";
                              
$errors = array();               
 if(isset($_GET["matricule"])){
     if($_GET["matricule"]){
        $matricule = $_GET["matricule"];
         $rech = $pdo->prepare("SELECT id FROM inscription WHERE matricule = ?");
         $resultat = $rech->execute([$matricule]);
         $resultat = $rech->fetch(PDO::FETCH_OBJ);
         $id = $resultat->id;    
         $query = $pdo->query("SELECT * FROM cursus where id_etudiant = $id");     
         $query->execute();

         
 if(isset($_POST["ajouter"])){
  if($_POST["annee"] && $_POST["institutions"] && $_POST["poste"]&& $_POST["diplome"]){
      $anne = $_POST['annee'];
      $institutions=$_POST['institutions'];
      $poste = $_POST['poste'];
      $diplome = $_POST['diplome'];
      $insert = $pdo->prepare("INSERT INTO cursus SET id_etudiant = ?, annee = ?, niveau = ? , institutions = ? , diplome = ? ");
      $insert->execute([$id,$anne,$poste,$institutions, $diplome]);
      header('Location:parcours_scolaire.php?matricule='.$matricule);
    }else{
      $errors[]=" veuillez remplir tous les champs";
    }
       
     }


     if(isset($_POST['pdf'])){
        $query = $pdo->prepare("SELECT * FROM cursus where id_etudiant =?");     
         $query->execute([$id]);
         $query->fetchAll();
         $nbr =  $query->rowCount();
          if($nbr >= 3){
              header('Location:../pdf.php?matricule='.$matricule);
        }else{
            $errors[] = "Vous devez au moins entrez votre cursus des 3 derniers années";
            
        }
       
      
     }


 }else{
   header("location:inscription.php");
 }


}else{
  header("location:inscription.php");
}
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
        <div class="heading" align="center">
               <span class="icon-logo"><img src="../images/icon-logo.png" alt="#"></span>
               
        </div>
<h1 align="center"> Inscription / Ajouter Parcours scolaire ou proffessionnel </h1>
<div class="row">
<div class="col-lg-1">
</div>
          <div class="col-lg-10">
            <section class="panel">
              <header class="panel-heading">
              <a href="../index.html"><i class="fa fa-home"></i>Acceuil   </a>  / <a href="../inscription.php"><i class="fa fa-user"></i> Inscription   </a>  Les 5 derniers années
              </header>
              <div class="panel-body">
              <?php if(!empty($errors)){
                        echo "<div class='alert alert-danger'>";
                            foreach($errors as $error){
                                echo "<li>". $error."</li>";
                        echo "</div>";
                    }
                }
                
                ?>
           <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                
              </header>
              <form method="post" action="">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>ANNEE</th>
                      <th>INSTITUTIONS</th>
                      <th>POSTE / NIVEAU</th>
                      <th>DIPLOME</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                   $i = 0;
                      while($res = $query->fetch(PDO::FETCH_OBJ)){
                         
?>
                    <tr>
                      <td><?= $i = $i + 1 ?></td>
                      <td><?= $res->annee ?></td>
                      <td><?= $res->institutions ?></td>
                      <td><?= $res->niveau ?></td>
                      <td><?= $res->diplome ?></td>
                      
                    </tr> 
                    <?php  } ?>
                    <tr>
                      <td></td>
                      <td> 
                      <div class="form-group">
                            <label for="exampleInputText">*</label>               
                            <input id="" type="text" name="annee" placeholder="annee"  class="form-control" id="exampleInputText">    
                        
                    </div>
                    </td>
                      <td>
                       <div class="form-group">
                            <label for="exampleInputText">*</label>               
                            <input id="" type="text" name="institutions" placeholder="institutions"  class="form-control" id="exampleInputText">    
                        
                    </div>
                    </td>
                      <td> 
                      <div class="form-group">
                            <label for="exampleInputText">*</label>               
                            <input id="" type="text" name="poste" placeholder="poste/niveau"  class="form-control" id="exampleInputText">    
                        
                    </div>
                    </td>
                      <td> 
                      <div class="form-group">
                            <label for="exampleInputText">*</label>               
                            <input id="" type="text" name="diplome" placeholder="diplome"  class="form-control" id="exampleInputText">    
                        
                    </div>
                    </td>
                    
                      
                    </tr>   
                             
                  </tbody>
                </table>
                <div class="form-group ">
                           <button type="submit" class="btn btn-danger btn-lg btn-block" name="ajouter">Ajouter  cursus</button>
                           <button type="submit" class="btn btn-primary btn-lg btn-block" name="pdf">Cliquer ici si vous avez finis </button>
                         </div>  
                        </div>
                  </form>      
            </section>
         </div>
              </div>

            </section>
          </div>
          </form>
        </div>
            </section>
           
           
          </div>
        
