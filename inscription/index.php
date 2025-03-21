<?php
if(session_id() == '' || !isset($_SESSION))
{
      session_start();
  }
require "../bd/bd.php";


if(isset($_POST["submit"])){
       
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $dob=htmlspecialchars($_POST['dob']);
        $lieu_naiss=htmlspecialchars($_POST['lieu_naiss']);
        $sexe=htmlspecialchars($_POST['lieu_naiss']);
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
        if(empty($nom)){
                $_SESSION["nom"] = "veuillez remplir ce champs";
        }if(empty($prenom)){
            $_SESSION["prenom"] = "veuillez remplir ce champs";
        } if(empty($dob)){
            $_SESSION["dob"] = "veuillez remplir ce champs";
        }
        if(empty($nom_pere)){
            $_SESSION["nom_pere"] = "veuillez remplir ce champs";
        }
        if(empty($nom_mere)){
            $_SESSION["nom_mere"] = "veuillez remplir ce champs";
        }
        if(empty($prof_mere)){
            $_SESSION["prof_mere"] = "veuillez remplir ce champs";
        }
        if(empty($prof_pere)){
            $_SESSION["prof_pere"] = "veuillez remplir ce champs";
        }
        if(empty($do)){
            $_SESSION["do"] = "veuillez remplir ce champs";
        }
        if(empty($ao)){
            $_SESSION["ao"] = "veuillez remplir ce champs";
        }  if(empty($ro)){
            $_SESSION["ro"] = "veuillez remplir ce champs";
        }
        if(empty($residence)){
            $_SESSION["residence"] = "veuillez remplir ce champs";
        }
        if(empty($lieu_delivrance)){
            $_SESSION["lieu_delivrance"] = "veuillez remplir ce champs";
        }
        if(empty($lieu_naiss)){
            $_SESSION["lieu_naiss"] = "veuillez remplir ce champs";
        }
        if(empty($nat)){
            $_SESSION["nat"] = "veuillez remplir ce champs";
        }
        if(empty($phone)){
          $_SESSION["phone"] = "veuillez remplir ce champs";
        }
        if(empty($date_delivrance)){
          $_SESSION["date_delivrance"] = "veuillez remplir ce champs";
        }
        if(empty($cni)){
            $_SESSION["cni"] = "veuillez remplir ce champs";
        }else{
              $date =  date("Y");
              $mat =  $date["-2"] .$date["-1"].$cycle.rand(0,999);
              $qt = $pdo->prepare("SELECT id FROM inscription WHERE matricule = ? ");
              $qt->execute([$mat]);
              $rs=$qt->fetch();
                if($rs){
                    $mat =  $date["-2"] .$date["-1"].$cycle.rand(0,999);
                }         
                $req = $pdo->prepare("INSERT INTO inscription SET matricule = ?, num_cni = ?, nom = ?, prenom = ?, sexe = ?,  nom_pere = ?, nom_mere = ?, proffession_pere = ?, proffession_mere = ?, situation_matrimoniale = ?, date_delivrance = ?, lieu_delivrance = ?, nationalite = ?, region_origine = ?, departement_origine = ?,  arrondissement = ?, residence_actuelle = ?, email = ?, telephone = ?, cycle = ?,date_naiss = ?, lieu_naiss = ? ");
                $req->execute([$mat,$cni,$nom,$prenom,$sexe,$nom_pere,$nom_mere,$prof_pere,$prof_mere, $status,$date_delivrance,$lieu_delivrance,$nat,$ro,$do,$ao,$residence,$email,$phone,$cycle,$dob,$lieu_naiss]);

        }

        
    }
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
    <title>Formulaire d'inscription</title>
  </head>
  <body>
    <form action="" class="form" method="post">
      <h1 class="text-center">Formulaire d'inscription</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        
        
        <div
          class="progress-step progress-step-active"
          data-title="Intro"
        ></div>
        <div class="progress-step" data-title="Contact"></div>
        <div class="progress-step" data-title="ID"></div>
        <div class="progress-step" data-title="Parent"></div>
       
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="cycle">CYCLE</label>
          <select name="cycle">
            <option value="DM">DELEGUE MEDICAL</option>
            <option value="AV">AUXILIARE DE VIE</option>
            <option value="AC">AIDE CHIMISTE BIOLOGISTE</option>
            <option value="HS">HYGIENNE ET SALUBRITE</option>
            <option value="SE">SECOURISME</option>
            <option value="AP">AUXILIARE DE PHARMACIE</option>
          </select>
        </div>
        <div class="row">
         <div col="md-6">
            <div class="input-group">
              <label for="nom">Nom </label>
              <input type="text" name="nom" id="nom" />
              
            <font color='red'><?php if(isset( $_SESSION["nom"])) echo $_SESSION["nom"] ;?></font>
            </div>
        </div>
        </div>
        <div class="input-group">
          <label for="prenom">Prénom </label>
          <input type="text" name="prenom" id="prenom" />
          <font color='red'><?php if(!empty( $_SESSION["prenom"])) echo $_SESSION["prenom"] ;?></font>
        </div>
        <div class="input-group">
          <label for="nat">Nationnalité </label>
          <input type="text" name="nat" id="nat" />
          <font color='red'><?php if(!empty( $_SESSION["nat"])) echo $_SESSION["nat"] ;?></font>
        </div>
        <div class="input-group">
          <label for="ro">Region d'origine </label>
          <input type="text" name="ro" id="ro" />
          <font color='red'><?php if(!empty( $_SESSION["ro"])) echo $_SESSION["ro"]; ?></font>
        </div>
        <div class="input-group">
          <label for="do">Departement </label>
          <input type="text" name="do" id="do" />
          <font color='red'><?php if(!empty( $_SESSION["do"])) echo $_SESSION["do"]; ?></font>
        </div>
        <div class="input-group">
          <label for="ao">Arrondissement </label>
          <input type="text" name="ao" id="ao" />
          <font color='red'><?php if(!empty( $_SESSION["ao"])) echo $_SESSION["ao"]; ?></font>
          <label for="ra">Residence Actuelle</label>
          <input type="text" name="ra" id="ra" />
          <font color='red'><?php if(!empty( $_SESSION["ra"])) echo $_SESSION["ra"]; ?></font>
        </div>
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
      </div>
      
      <div class="form-step">
        <div class="input-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone" />
          <font color='red'><?php if(!empty( $_SESSION["phone"])) echo $_SESSION["phone"]; ?></font>
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" />
          <font color='red'><?php if(!empty( $_SESSION["email"])) echo $_SESSION["email"]; ?></font>
          <font color='red'><?php if(!empty( $_SESSION["email_format"])) echo $_SESSION["email_format"]; ?></font>
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="dob">Date de Naissance</label>
          <input type="date" name="dob" id="dob" />
          <font color='red'><?php if(!empty( $_SESSION["dob"])) echo $_SESSION["dob"]; ?></font>
        </div>
        <div class="input-group">
          <label for="lieu_naiss">Lieu de naissance</label>
          <input type="text" name="lieu_naiss" id="lieu_naiss" />
          <font color='red'><?php if(!empty( $_SESSION["lieu_naiss"])) echo $_SESSION["lieu_naiss"] ;?></font>
        </div>
        <div class="input-group">
          <label for="sexe">Sexe</label>
          <select name="sexe">
            <option value="M">Homme</option>
            <option value="F">Femme</option>
          </select>
        </div>
        <div class="input-group">
          <label for="status">Situation matrimoniale</label>
          <select name="status">
            <option value="C">Célibataire</option>
            <option value="M">Mariée</option>
          </select>
        </div>
        <div class="input-group">
          <label for="ID">Numeros de CNI</label>
          <input type="number" name="ID" id="ID" />
          <font color='red'><?php if(!empty( $_SESSION["ID"])) echo $_SESSION["ID"] ?></font>
          <label for="date_delivrance">Date de délivrance :</label>
          <input type="date" name="date_delivrance" id="date_delivrance" />
          <font color='red'><?php if(!empty( $_SESSION["date_delivrance"])) echo $_SESSION["date_delivrance"] ?></font>
          <label for="lieu_delivrance">Lieu de delivrance</label>
          <input type="text" name="lieu_delivrance" id="lieu_delivrance" />
          <font color='red'><?php if(!empty( $_SESSION["lieu_delivrance"])) echo $_SESSION["lieu_delivrance"] ?></font>

        </div>
        
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
       
        <div class="input-group">
          <label for="nom_pere">Nom du pere</label>
          <input type="text" name="nom_pere" id="nom_pere" />
          <font color='red'><?php if(!empty( $_SESSION["nom_pere"])) echo $_SESSION["nom_pere"] ?></font>
        </div>
         <div class="input-group">
          <label for="prof_pere">profession</label>
          <input type="text" name="prof_pere" id="prof_pere"  />
          <font color='red'><?php if(!empty( $_SESSION["prof_pere"])) echo $_SESSION["prof_pere"] ?></font>
        </div>
         <div class="input-group">
          <label for="nom_mere">Nom de la mère </label>
          <input type="text" name="nom_mere" id="nom_mere" />
          <font color='red'><?php if(!empty( $_SESSION["nom_mere"])) echo $_SESSION["nom_mere"] ?></font>
        </div>
         <div class="input-group">
          <label for="prof_mere">profession</label>
          <input type="text" name="prof_mere" id="prof_mere" />
          <font color='red'><?php if(!empty( $_SESSION["prof_mere"])) echo $_SESSION["prof_mere"] ?></font>
        </div>
        
           <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <input type="submit" value="Enregistrer" class="btn" name="submit" />
        </div>
        
        
      </div>

    </form>
  </body>
</html>
