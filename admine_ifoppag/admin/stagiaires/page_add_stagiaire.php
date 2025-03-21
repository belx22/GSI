<?php
require('../utilisateurs/ma_session.php');
include("../fonctions.php");
require('../utilisateurs/mon_role.php');
require('../connexion.php');

$requete_filieres = "SELECT * FROM filiere";
$result_requete_filieres = $pdo->query($requete_filieres);
$toutes_les_filieres = $result_requete_filieres->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> Nouveau stagiaire </title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/jquery-ui-1.10.4.custom.css">
    <link rel="stylesheet" href="../css/monStyle.css">

    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/jquery-ui-1.10.4.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/school.js"></script>

    <script src="js/jquery-ui-i18n.min.js"></script>
    <script>
        $(function () {
            // définit les options par défaut du calendrier
            $.datepicker.setDefaults({
                showButtonPanel: true,// affiche des boutons sous le calendrier
                showOtherMonths: true, // affiche les autres mois
                selectOtherMonths: true // possibilités de sélectionner les jours des autres mois
            });

            //$("#calendar").datepicker(); // affiche le calendrier par défaut
            //$("#calendar").datepicker($.datepicker.regional["fr"]); // affiche le calendrier en fr
            $("#calendar").datepicker({
                dateFormat: "yy-mm-dd",

            });
            $("#calendar1").datepicker({
                dateFormat: "yy-mm-dd",

            });
        });
    </script>


</head>

<body>
<?php include('../menu.php'); ?>
<br><br><br>
<div class="container">


    <div class="panel panel-primary">
        <div class="panel-heading" align="center"> Nouveau stagiaire</div>
        <div class="panel-body">
            <form method="post" action="insert_stagiaire.php" enctype="multipart/form-data">
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
                    <label for="exampleInputEmail">Email*</label>
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
                <button type='submit' class="btn btn-success"> Enregistrer le stagiaire</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
