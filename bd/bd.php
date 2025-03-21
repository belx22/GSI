<?php
try {

   // $pdo = new PDO("mysql:host=localhost;dbname=id16780143_projet","id16780143_belx22", "^vu#~*7vJ/9DgFq$");
     $pdo = new PDO("mysql:host=localhost;dbname=","", "");
}catch (Exception $e){
    die('Erreur : ' . $e->getMessage());

    //die('Erreur : impossible de se connecter à la base de donnée');
}
?>