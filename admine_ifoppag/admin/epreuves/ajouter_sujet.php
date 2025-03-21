<?php
require('../utilisateurs/ma_session.php');
require('../utilisateurs/mon_role.php');



require('../connexion.php');

if (isset($_POST["submit"])) { //AJOUTER Un fichier dans ma BD
    $errors = array();
    $date=date("Y/m/d");
    if (!empty($_FILES)) { 
        $annee = $_POST["annee"];
        $concours =     $_POST["concours"];
        $name = $_FILES["fichier"]["name"];
        $extension = strrchr($name, ".");
        $extension_autoriser = array('.jpg', '.jpeg', '.png','.pdf','.docx');
        $file_tmp = $_FILES["fichier"]["tmp_name"];
        $file_dest = "fichiers/" . $name;
        if (in_array($extension, $extension_autoriser)) {
            if (move_uploaded_file($file_tmp, $file_dest)) {
                $req = $pdo->prepare("INSERT INTO epreuves SET  nom = ?  , annee = ? , concours = ?, date_publication = ? ");
                $req->execute([$name, $annee,$concours,$date]);
                $errors[] = "epreuve bien ajouter!!!!!!!!!!!!";
                echo var_dump($_FILES["fichier"]);
            } else $errors[] = "erreur lors de envoie du fichier";
        } else $errors[] = " mauvais";
    }


}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> Nouvelle filiére </title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/monStyle.css">
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
<?php include('../menu.php'); ?>
<br><br><br>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading" align="center"> Nouvelle filiére</div>
        <?php if(!empty($errors)){
                                    echo "<div class='alert alert-danger'>";
                                        foreach($errors as $error){
                                            echo "<li>". $error."</li>";
                                    echo "</div>";
                                }
                            }
                
                ?>
        <div class="panel-body">

            <form method="post" action=""  enctype="multipart/form-data">

                <div class="row my-row">
                <label for="concours" class="control-label col-sm-1">concours </label>
                    <div class="col-sm-2">
                        <select name="concours" id="concours" class="form-control">
                            <option value="Ecole">Ecole</option>
                            <option value="CQP">CQP</option>
                            <option value="DQP">DQP</option>
                            
                        </select>

                    </div>
                   


                    <label for="annee" class="control-label col-sm-1">Année </label>
                    <div class="col-sm-2">
                    <select class="form-control" 
								name="annee"
								>
                        <?php for($i=1;$i<=20;$i++){
                          $annee = 2000 + $i;      
                        ?>
                            <option><?= $annee  ?></option>
                        <?php
                        }
                        ?>								
						</select>

                    </div>

                    <label for="fichier" class="control-label col-sm-1"> Fichier </label>
                    <div class="col-sm-4">
                        <input type="file" name="fichier" id="fichier" class="form-control">
                    </div>

                </div>

                

                <button type='submit' class="btn btn-success btn-block" name="submit"> Enregistrer</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
