<?php 
require 'bd/bd.php';
    if(isset($_POST["submit"])){
        $errors = array();
        if($_POST["matricule"]){
            $res = $pdo->prepare("SELECT * from inscription where matricule = ?");
            $res->execute([$_POST["matricule"]]);
            $rest = $res->fetch(PDO::FETCH_OBJ);
            if($rest){
                header('Location:register/update.php?matricule='.$rest->matricule);
            }else{
                $errors[] = "ce matricule n'existe pas veuillez réessayez";
            }
        }
    }


require "vues/entete.php" ; ?>
  <div class="conter1">
<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
       <br><br><br> <br><br><br><br> <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2> Modifier Inscriptions</h2>
            </div>
         </div>
     
 <div class="container">
      <div class="row">
         <div col="md-6">
            <section class="panel">
                <form method="post" action="">
                        <div class="panel-body">
                        <?php if(!empty($errors)){
                                    echo "<div class='alert alert-danger'>";
                                        foreach($errors as $error){
                                            echo "<li>". $error."</li>";
                                    echo "</div>";
                                }
                            }
                
                ?>
                    <div class="form-group ">
                    <div class="col-sm-2">
                           
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" id="matricule" name="matricule" minlength="7" maxlength="7" type="text" placeholder="matricule XXXXXXX " required/>             
                        </div>
                        <div class="col-sm-2">
                            
                        </div>
                    </div>
                    <div class="form-group ">
                           <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Entrez votre matricule</button>
                         </div>  
                        </div>
                  </form>      
            </section>
         </div>   
      </div>   
</div>





<?php require "vues/footer.php";   ?>