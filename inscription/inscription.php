<?php

require "../bd/bd.php";


if(isset($_POST["submit"])){
        $errors = array();
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
                $errors[] = "veuillez remplir ce champs";
        }if(empty($prenom)){
            $errors[] = "veuillez remplir ce champs";
        } if(empty($dob)){
            $errors[] = "veuillez remplir ce champs";
        }
        if(empty($nom_pere)){
            $errors[] = "veuillez remplir ce champs";
        }
        if(empty($nom_mere)){
            $errors[] = "veuillez remplir ce champs";
        }
        if(empty($prof_mere)){
            $errors[] = "veuillez remplir ce champs";
        }
        if(empty($prof_pere)){
            $errors[] = "veuillez remplir ce champs";
        }
        if(empty($do)){
            $errors[] = "veuillez remplir ce champs";
        }
        if(empty($ao)){
            $errors[] = "veuillez remplir ce champs";
        }  if(empty($ro)){
            $errors[] = "veuillez remplir ce champs";
        }
        if(empty($residence)){
            $errors[] = "veuillez remplir ce champs";
        }
        if(empty($lieu_delivrance)){
            $errors[] = "veuillez remplir ce champs";
        }
        if(empty($lieu_naiss)){
            $errors[] = "veuillez remplir ce champs";
        }
        if(empty($nat)){
            $errors[] = "veuillez remplir ce champs";
        }
        if(empty($cni)){
            $errors[] = "veuillez remplir ce champs";
        }if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $errors[] = "format email est incorect";
        }

        $date =  date("Y");
        $mat =  $date["-2"] .$date["-1"].$cycle.rand(0,999);
        $qt = $pdo->prepare("SELECT id FROM inscription WHERE matricule = ? ");
        $qt->execute([$mat]);
        $rs=$qt->fetch();
        if($rs){
            $mat =  $date["-2"] .$date["-1"].$cycle.rand(0,999);
        }
        
        $req = $pdo->prepare("INSERT INTO inscription SET matricule = ?, num_cni = ?, nom = ?, prenom = ?, sexe = ?,  nom_pere = ?, nom_mere = ?, proffesion_pere = ?, proffession_mere = ?, situation_matrimoniale = ?, date_delivrance = ?, lieu_delivrance = ?, nationalite = ?, region_origine = ?, departement_origine = ?,  arrondissement = ?, residence_actuelle = ?, email = ?, telephone = ?, cycle = ?,date_naiss = ?, lieu_naiss = ? ");
        $req->execute([$mat,$cni,$nom,$prenom,$sexe,$nom_pere,$nom_mere,$prof_pere,$prof_mere, $status,$date_delivrance,$lieu_delivrance,$nat,$ro,$do,$ao,$residence,$email,$phone,$cycle,$dob,$lieu_naiss]);

    }