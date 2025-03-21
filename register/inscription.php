<?php
 if(session_id() == '' || !isset($_SESSION))
 {
       session_start();
   }



if(isset($_POST["submit"])){
        $errors = array();
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $dob=htmlspecialchars($_POST['dob']);
        $lieu_naiss=htmlspecialchars($_POST['lieu_naiss']);
        $sexe=htmlspecialchars($_POST['sexe']);
        $nom_pere=htmlspecialchars($_POST['nom_pere']);
        $nom_mere=htmlspecialchars($_POST['nom_mere']);
        $prof_mere=htmlspecialchars($_POST['prof_mere']);
        $prof_pere=htmlspecialchars($_POST['prof_pere']);
        $nat=htmlspecialchars($_POST['nat']);
        $date_delivrance=htmlspecialchars($_POST['date_delivrance']);
        $cni=htmlspecialchars($_POST['ID']);
        $lieu_delivrance=htmlspecialchars($_POST['lieu_delivrance']);
        $ro=htmlspecialchars($_POST['ro']);
        $do=htmlspecialchars($_POST['do']);
        $ao=htmlspecialchars($_POST['ao']);
        $residence=htmlspecialchars($_POST['ra']);
        $email=htmlspecialchars($_POST['email']);
        $phone=htmlspecialchars($_POST['phone']);
        $status=htmlspecialchars($_POST['status']);
        $cycle = htmlspecialchars($_POST['cycle']);
       
        if(!$nom || !$dob || !$nom_pere || !$nom_mere || !$prof_mere || !$prof_pere || !$do || !$ao || !$lieu_naiss || !$lieu_delivrance || !$nat || !$residence || !$ro || !$cni  ){
                $errors[] = "veuillez remplir tous les champs";
                
        }else if($sexe == "sexe" || $cycle=="cy" || $status=="sm"){
                $errors[] = "veuillez remplir tous les champs";
        }else{

                    $mat = $pdo->prepare("SELECT * FROM inscription WHERE num_cni = ?");
                    $tor = $mat->execute([$cni]);
                    $resu = $mat->fetch(PDO::FETCH_OBJ);
                    if($resu){
                        $errors[] = "Desoler ce numero de Cni a deja été utiliser veuillez cliquer sur modifier si vous vous etes deja inscrit";
                    }else{
                        
                                $date =  date("Y");
                                $matricule =  $date["-2"] .$date["-1"].$cycle.rand(0,999);
                                $qt = $pdo->prepare("SELECT id FROM inscription WHERE matricule = ? ");
                                $qt->execute([$matricule]);
                                $rs=$qt->fetch();
                                if($rs){
                                    $matricule =  $date["-2"] .$date["-1"].$cycle.rand(0,999);
                                }                               
                                $req = $pdo->prepare("INSERT INTO inscription SET matricule = ?, num_cni = ?, nom = ?, prenom = ?, sexe = ?,  nom_pere = ?, nom_mere = ?, proffession_pere = ?, proffession_mere = ?, situation_matrimoniale = ?, date_delivrance = ?, lieu_delivrance = ?, nationalite = ?, region_origine = ?, departement_origine = ?,  arrondissement = ?, residence_actuelle = ?, email = ?, telephone = ?, cycle = ?,date_naiss = ?, lieu_naiss = ? ");
                                $req->execute([$matricule,$cni,$nom,$prenom,$sexe,$nom_pere,$nom_mere,$prof_pere,$prof_mere, $status,$date_delivrance,$lieu_delivrance,$nat,$ro,$do,$ao,$residence,$email,$phone,$cycle,$dob,$lieu_naiss]);                       
                                header("Location:parcours_scolaire.php?matricule=".$matricule);
                    } 
           
        }

     
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
<h1 align="center"> Inscription </h1>
<div class="row">
<div class="col-lg-1">
</div>
          <div class="col-lg-10">
            <section class="panel">
              <header class="panel-heading">
              <i class="fa fa-home"></i><a href="../index.html">Acceuil   </a>  /   <i class="fa fa-user"></i><a href="../inscription.php"> Inscription   </a>Informations personnelles
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
             <form role="form" method="post" action="">
                
                <div class="form-group col-sm-12">
                     <select name="cycle" class="form-control input m-bot15">
                        <option value="cy">Cycle*</option>
                        <option value="DM" <?php if(isset($cycle)){ if($cycle=="DM") echo "selected"; }?>>DELEGUE MEDICAL</option>
                        <option value="AV" <?php if(isset($cycle)){ if($cycle=="AV") echo "selected"; }?>>AUXILIARE DE VIE</option>
                        <option value="AC" <?php if(isset($cycle)){ if($cycle=="AC") echo "selected"; }?>>AIDE CHIMISTE BIOLOGISTE</option>
                        <option value="HS" <?php if(isset($cycle)){ if($cycle=="HS") echo "selected"; }?>>HYGIENNE ET SALUBRITE</option>
                        <option value="SE" <?php if(isset($cycle)){ if($cycle=="SE") echo "selected"; }?>>SECOURISME</option>
                        <option value="AP" <?php if(isset($cycle)){ if($cycle=="AP") echo "selected"; }?>>AUXILIARE DE PHARMACIE</option>
                        </select>
                </div>   
               
                <div class="form-group col-sm-12">
                  <select name="sexe" class="form-control">
                                  <option value="sexe">Sexe*</option>
                                  <option value="M" <?php if(isset($sexe)){ if($sexe=="M") echo "selected"; }?>>Masculin</option>
                                  <option value="F" <?php if(isset($sexe)){ if($sexe=="F") echo "selected"; }?>>Feminin</option>
                        </select>
                </div>

                <div class="form-group col-sm-6">
                        <label for="exampleInputText">Nom*</label>
                         <input type="texte" name="nom" value="<?php if(isset($nom)) echo $prenom; ?>" placeholder="Nom"  class="form-control" id="exampleInputText">       
                 </div>
                <div class="form-group col-sm-6">
                    <label for="exampleInputText">Prenom</label>
                    <input type="text" name="prenom" value="<?php if(isset($nom)) echo $prenom; ?>" class="form-control" id="exampleInputText" placeholder="prenom"> 
                </div>
             
                  <div class="form-group col-sm-6">
                        <label for="exampleInputText">Date de naissance*</label>               
                          <input id="" type="date" value="<?php if(isset($nom)) echo $dob; ?>"name="dob" placeholder="date de naissance"  class="form-control" id="exampleInputText">    
                       
                 </div>

                 <div class="form-group col-sm-6">
                        <label for="exampleInputText">Lieu de naissance*</label>
                          <input id="" type="text" value="<?php if(isset($nom)) echo $lieu_naiss; ?>"name="lieu_naiss" placeholder="lieu de naissance"  class="form-control" id="exampleInputText">       
                 </div>
                 
                 <div class="form-group col-sm-6">
                    <label for="exampleInputText">Region d'origine*</label>
                    <input type="text" class="form-control" value="<?php if(isset($nom)) echo $ro; ?>" name="ro" id="exampleInputText" placeholder="">
                  </div>

                  <div class="form-group col-sm-6">
                    <label for="exampleInputText">Departement d'origine*</label>
                    <input type="text" class="form-control" value="<?php if(isset($nom)) echo $do; ?>" name="do" id="exampleInputText" placeholder="">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="exampleInputText">Arrondissement*</label>
                    <input type="text" class="form-control" value="<?php if(isset($nom)) echo $ao; ?>" name="ao" id="exampleInputText" placeholder="">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="exampleInputText">Residence Actuelle*</label>
                    <input type="text" class="form-control" value="<?php if(isset($nom)) echo $residence; ?>" name="ra" id="exampleInputText" placeholder="">
                  </div>
             </div>
                    

                 <header class="panel-heading">
               Contact
              </header><br>
            <div class="col-sm-12">
                    <div class="form-group ">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" class="form-control" value="<?php if(isset($nom)) echo $email; ?>" name="email" id="exampleInputText" placeholder="Email">
                  </div>
                 
                  <div class="form-group ">
                    <label for="exampleInputText">Telephone*</label>
                    <input type="tel" class="form-control" value="<?php if(isset($nom)) echo $phone; ?>" name="phone" id="exampleInputText" placeholder="+237" maxlength="9">
                  </div>
    
            </div>
             <header class="panel-heading">
               ID
              </header><br>
            <div class="col-sm-12">
                <div class="form-group col-sm-12">
                        <select name="status" class="form-control input m-bot15">
                            <option value="sm">Situation matrimoniale*</option>
                            <option value="C" <?php if(isset($status)){ if($status=="C") echo "selected"; }?>>Célibataire</option>
                            <option value="M" <?php if(isset($status)){ if($status=="M") echo "selected"; }?>>Marié(e)</option>
                            
                            </select>
                    </div>   
                
                
                    <div class="form-group col-sm-6">
                        <label for="exampleInputText">Numeros de Cni / Passeport*</label>
                        <input type="text" class="form-control" value="<?php if(isset($nom)) echo $cni; ?>" id="" name="ID" placeholder="Numeros de CNI"> 
                    </div>
                    
                
                    <div class="form-group col-sm-6">
                            <label for="exampleInputText">Date de delivrance*</label>               
                            <input id="" type="date" value="<?php if(isset($nom)) echo $date_delivrance; ?>" name="date_delivrance" placeholder="date_delivrance"  class="form-control" id="exampleInputText">    
                        
                    </div>

                    <div class="form-group col-sm-6">
                            <label for="exampleInputText">Lieu de delivrance*</label>
                            <input id="" type="text" value="<?php if(isset($nom)) echo $lieu_delivrance; ?>" name="lieu_delivrance" placeholder="lieu de delivrance"  class="form-control" id="exampleInputText">       
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleInputText">Nationalité*</label>
                        <input type="text" class="form-control" value="<?php if(isset($nom)) echo $nat; ?>" id="exampleInputText" placeholder="nationalité" name="nat">
                    </div>
                </div>

           
            <div class="col-sm-12">
                <div class="form-group col-sm-6">
                    <label for="exampleInputText">Nom du pere*</label>
                    <input type="text" class="form-control" value="<?php if(isset($nom)) echo $nom_pere; ?>" id="" name="nom_pere" placeholder="Nom pere"> 
                </div>
                
               
                  <div class="form-group col-sm-6">
                        <label for="exampleInputText">Proffession* </label>               
                          <input id="" type="text" name="prof_pere" value="<?php if(isset($nom)) echo $prof_pere; ?>" placeholder="Proffession"  class="form-control" id="exampleInputText">    
                       
                 </div>

                 <div class="form-group col-sm-6">
                        <label for="exampleInputText">nom de la mère*</label>
                          <input id="" type="text" name="nom_mere" value="<?php if(isset($nom)) echo $nom_mere; ?>" placeholder="Nom mere"  class="form-control" id="exampleInputText">       
                 </div>
                 <div class="form-group col-sm-6">
                    <label for="exampleInputText">Proffession*</label>
                    <input type="text" class="form-control" value="<?php if(isset($nom)) echo $prof_mere; ?>" id="exampleInputText" placeholder="Proffession" name="prof_mere">
                  </div>

            </div>
            


             <div class="panel-body">
                           
                           <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">S'inscrire</button>
             </div>
            </form>
            </section>
           
           
          </div>
        
