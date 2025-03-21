<?php
require('../utilisateurs/ma_session.php');
require('../utilisateurs/mon_role.php');



require('../connexion.php');

if (isset($_GET['id_epreuve'])){

    $id_epreuve =$_GET['id_epreuve'];
$req = $pdo->prepare("DELETE from epreuves where id_epreuve = ?");
$req->execute([$id_epreuve]);
header("Location:sujet.php");
}else 
{
    header("Location:sujet.php");
}




?>

