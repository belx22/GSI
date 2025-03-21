<?php 

require 'bd/bd.php';
    if(isset($_GET["sujet"])){
        $sujet= $_GET["sujet"];
        $req = $pdo->prepare("SELECT * FROM epreuves where concours = ?  ");
        $req->execute([$sujet]);     
    }



require "vues/entete.php" ; ?>

<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
       <br><br><br> <br><br><br><br> <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Anciens sujets</h2>
            </div>
         </div>
     
         <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="thumbnail">
                        <div id="remositorypageheading">
                            <h2>Téléchargement
                            </h2>
                            <!-- End of remositorypageheading-->
                        </div>
                        <div class="caption">
                            <section class="panel">
                                <header class="panel-heading">
                                   
                                </header>
                               
                     
                              
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>

                                            <th>Dossier / Fichiers</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 

                                       while( $result = $req->fetch(PDO::FETCH_OBJ)){

                                        ?>
                                        <tr>
                                       
                                            <td> <a href="admine_ifoppag/admin/epreuves/fichiers/<?=  $result->nom ?>"><img src="images/1v.png" class="img-tel"> </a> </td>
                                            <td>
                                                <h4> <a href="admine_ifoppag/admin/epreuves/fichiers/<?=  $result->nom ?>"> <?=  $result->nom ?> </h4></a>
                                            </td>
                                        
                                            
                                        </tr>
                                    <?php   } ?>
                                       

                                    </tbody>
                                </table>
                           

                            </section>
                        </div>
                    </div>
                </div>

<?php require "vues/footer.php";   ?>