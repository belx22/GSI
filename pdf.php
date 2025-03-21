
<?php 
                                   
 if(isset($_GET["matricule"])){
    if($_GET["matricule"]){
        try {		 
            $pdo = new PDO("mysql:host=localhost;dbname=ifoppa3418_projet","ifoppa3418_belx", "123212Bello");

            $connexion = $pdo;
            $matricule = $_GET["matricule"];
            //  Récupération de l'utilisateur 
            $req = $connexion->prepare('SELECT * FROM inscription WHERE matricule = :matricule');
            $req->execute(array(
                'matricule' => $matricule));
            $resultat = $req->fetch(PDO::FETCH_OBJ);
                $id = $resultat->id;
                $matricule =  $resultat->matricule; 
                $nom =  $resultat->nom;       
                $prenom=$resultat->prenom;
                $dob=$resultat->date_naiss;
                $lieu_naiss=$resultat->lieu_naiss;
                $sexe=$resultat->sexe;
                $nom_pere=$resultat->nom_pere;
                $nom_mere=$resultat->nom_mere;
                $prof_mere=$resultat->proffession_mere;
                $prof_pere=$resultat->proffession_pere;
                $nat=$resultat->nationalite;
                $date_delivrance=$resultat->date_delivrance;
                $cni=$resultat->num_cni;
                $lieu_delivrance=$resultat->lieu_delivrance;
                $ro=$resultat->region_origine;
                $do=$resultat->departement_origine;
                $ao=$resultat->arrondissement;
                $residence=$resultat->residence_actuelle;
                $email=$resultat->email;
                $phone=$resultat->telephone;
                $status=$resultat->situation_matrimoniale;
                $cycle =$resultat->cycle;
                $serch = $pdo->prepare("SELECT * FROM cursus WHERE id_etudiant = ?");
                $serch->execute([$id]);
                

        }catch (PDOException $exception) 
            {		 
                echo $exception->getMessage();
                exit('Erreur de connexion à la base de données');		
            }

    }else  header("location:inscription.php");     
}else  header("location:inscription.php");


require "fpdf/fpdf.php";

class myPDF extends FPDF{


    function header(){
        $this->SetFont('Arial','',5);
        $this->Cell(5,5,'',0,0);
        $this->Cell(0,5,'REPUBILIQUE DU CAMEROUN',0,0);
        $this->Image('images/logo.png',90,10,30);
        $this->SetFont('Arial','',5);
        
        $this->Cell(-7,5,'REPUBLIC OF CAMEROON',0,0,'R');
        $this->Ln(2);
        $this->SetFont('Arial','',5);
        $this->Cell(10,5,'',0,0);
        $this->Cell(150,5,'Paix-Travail-Patrie',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(21,5,'Peace-Work-Fatherland',0,0,'R');
        $this->Ln(2);
        $this->SetFont('Arial','',5);
        $this->Cell(15,5,'',0,0);
        $this->Cell(150,5,'**********',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(10,5,'**********',0,0,'R');
        $this->Ln(2);
        $this->SetFont('Arial','',5);
        $this->Cell(150,5,"MINISTERE DE L'EMPLOI ET DE LA FORMATION",0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(0,5," MINISTRY OF EMPLOYMENT AND VOCATIONAL",0,0,'R');
        $this->Ln(4);
        $this->SetFont('Arial','',5);
        $this->Cell(10,5,'',0,0);
        $this->Cell(150,5,'PROFESSIONNELLE',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(16,5,'TRAINING',0,0,'R');
        $this->Ln(4);
        $this->SetFont('Arial','',5);
        $this->Cell(15,5,'',0,0);
        $this->Cell(150,5,'**********',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(10,5,'**********',0,0,'R');
        $this->Ln(2);
        $this->SetFont('Arial','',5);
        $this->Cell(-5,5,'',0,0);
        $this->Cell(150,5,'DELEGATION REGIONALE DE LEMPLOI ET DE LA FORMATION',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(0,5,'REGIONAL DELEGATION OF EMPLOYMENT AND ',0,0,'R');
        $this->Ln(4);
        $this->SetFont('Arial','',5);
        $this->Cell(10,5,'',0,0);
        $this->Cell(150,5,'PROFESSIONNELLE',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(20,5,'VOCATIONAL TRAINING',0,0,'R');
        $this->Ln(2);
        $this->SetFont('Arial','',5);
        $this->Cell(15,5,'',0,0);
        $this->Cell(150,5,'**********',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(10,5,'**********',0,0,'R');
        $this->Ln(2);
        $this->SetFont('Arial','',5);
        $this->Cell(150,5,'DELEGATION DEPARTEMENTAL DE LA BENOUE',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(0,5,'BENOUE DIVISIONAL DELEGATION',0,0,'R');
        $this->Ln(2);
        $this->SetFont('Arial','',5);
        $this->Cell(15,5,'',0,0);
        $this->Cell(150,5,'**********',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(10,5,'**********',0,0,'R');
        $this->Ln(2);
        $this->SetFont('Arial','',5);
        $this->Cell(-5,5,'',0,0);
        $this->Cell(150,5,'INSTITUT DE FORMATION PROFESSIONNELLE PARAMEDICALE DE ',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(50,5,'PARAMEDICAL PROFESSIONNAL INSTITUTE CENTER OF',0,0,'R');
        $this->Ln(2);
        $this->SetFont('Arial','',5);
        $this->Cell(15,5,'',0,0);
        $this->Cell(150,5,' GAROUA',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(10,5,'GAROUA',0,0,'R');
        $this->Ln(2);
        $this->SetFont('Arial','',5);
        $this->Cell(15,5,'',0,0);
        $this->Cell(150,5,' IFOPPAG',0,0);
        $this->SetFont('Arial','',5);
        $this->Cell(9,5,'PPICC',0,0,'R');
        $this->Ln(6);
        $this->SetFont('Arial','',5);
        $this->Cell(-15,5,' TEL:698 984 298/697 555 656',0,1);
        $this->SetFont('Arial','BU',20);
        $this->Ln(6);
        $this->Cell(200,5, "FICHE D'INSCRIPTION",0,1,'C');
        $this->SetFont('Arial','B',20);
        $this->Cell(200,5, "",0,1,'C');
        $this->SetFont('Arial','BU',15);
        $this->Cell(200,5, "2021-2022",0,1,'C');
      

      
    }
    function footer(){
        
    }
}
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('P','A4',0);
$pdf->SetFont('Arial','B',15);
$pdf->Ln(6);
$pdf->Cell(15,0,'CYCLE ',0,0);
$pdf->Ln(2);
$pdf-> SetTextColor(226, 4, 23);
$pdf->SetFont('Arial','',22);
$pdf->Cell(3,7,"",0,0);
$pdf->Cell(14,7,$cycle,1,1);
$pdf-> SetTextColor(0,0,0);
$pdf->Ln(1);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(122,10,'',0,0,'');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(25,10,'MATRICULE ',0,1,'R');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(112,50,'',0,0,'');
$pdf->SetFont('Arial','',15);
$pdf-> SetTextColor(226, 4, 23);
$pdf->Cell(25,7,$matricule,1,1,'R');
$pdf->Ln(2);
$pdf-> SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(35,5,"Noms et prenoms :" );
$pdf->SetFont('Arial','',10);
//$pdf-> SetTextColor(100,100,200);
$pdf->Cell(50,5, $nom."  ".$prenom,0,1);
$pdf->SetFont('Arial','B',10);
//NEXT
$pdf->Cell(47,5,"Date et Lieu de Naissance : ",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(40,5, $dob." a ". $lieu_naiss,0,0);    
$pdf->Cell(30,5,'',0,0);  
$pdf->SetFont('Arial','B',10);    
$pdf->Cell(25,5," Sexe :",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(35,5, $sexe,0,1);
$pdf->SetFont('Arial','B',10); 
//NEXT
$pdf->Cell(27,5,"Fils/Fille de : ",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(60,5,$nom_pere."    ",0,0);
$pdf->Cell(30,5,'',0,0); 
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(25,5,"Profession : ",0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(35,5,$prof_pere,0,1);
//NEXT
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(20,5,"Et de : ");
$pdf->SetFont('Arial','',10); 
$pdf->Cell(67,5, $nom_mere,0,0);
$pdf->Cell(30,5,'',0,0); 
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(25,5,"Profession : ");
$pdf->SetFont('Arial','',10); 
$pdf->Cell(35,5, $prof_mere,0,1);
//NEXT
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(50,5,"Situation matrimoniale : ",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(37,5,$status,0,0);
$pdf->Cell(30,5,'',0,0); 
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(15,5,"CNI : ");
$pdf->SetFont('Arial','',10); 
$pdf->Cell(35,5, $cni,0,1);
//NEXT
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(27,5,"Delivre le : ",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(60,5, $date_delivrance,0,0);
$pdf->Cell(30,5,'',0,0); 
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(35,5," lieu de delivrance : ",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(35,5, $lieu_delivrance,0,1);
//NEXT
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(30,5,"Nationnalite : ",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(57,5, $nat,0,0);
$pdf->Cell(30,5,'',0,0); 
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(35,5,"Region d'origine : ",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(35,5, $ro,0,1);
//NEXT
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(27,5,"Departement : ",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(60,5, $do."  ");
$pdf->Cell(30,5,'',0,0); 
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(35,5,"Arrondissement : ",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(30,5, $ao,0,1);
//NEXT
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(35,5,"Residence actuelle : ",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(52,5, $residence,0,1);
$pdf->SetFont('Arial','B',10); 
//NEXT
$pdf->Cell(27,5,"Email : ");
$pdf->Cell(60,5, $email,0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(30,5,'',0,0);
$pdf->SetFont('Arial','B',10);  
$pdf->Cell(20,5,"Tel :",0,0);
$pdf->SetFont('Arial','',10); 
$pdf->Cell(35,5, $phone,0,1);
$pdf->SetFont('Arial','B',10); 
$pdf->Ln(5);
$pdf->Cell(25,7,'ANNEE',1,0);
$pdf->Cell(50,7,'INSTITUTION',1,0);
$pdf->Cell(50,7,'POSTE/NIVEAU',1,0);
$pdf->Cell(50,7,'DIPLOME',1,1);
$pdf->SetFont('Arial','',10); 
    while($rt = $serch->fetch(PDO::FETCH_OBJ)){
        $pdf->Cell(25,7,$rt->annee,1,0);
        $pdf->Cell(50,7,$rt->institutions,1,0);
        $pdf->Cell(50,7,$rt->niveau,1,0);
        $pdf->Cell(50,7,$rt->diplome,1,1);
    }



$pdf->SetFont('Arial','',10);
$pdf->Ln(6);
$pdf->Cell(35,5,"Je m'engage a verser la somme de ........................ Representant les frais d'inscription et la somme de ........................  ",0,1);
$pdf->Write(7," representant la totalite de la scolarite dans les delais definis et je certifie exactes les informations fournies.",0,1);
$pdf->Ln(12);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(55,5,"Date et signature de l'etudiant",0,0);
$pdf->Cell(90,5,'',0,0);
$pdf->Cell(50,7,"VISA de l'Administration",0,1);

$pdf->Output('I', 'fiche de :'.$nom , true);
?>
