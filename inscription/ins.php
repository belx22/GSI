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


  <div class="row">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Basic Forms
              </header>
              <div class="panel-body">
                <form role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                  </div>
                  <div class="checkbox">
                    <label>
                                          <input type="checkbox"> Check me out
                                      </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </section>
          </div>
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Horizontal Forms
              </header>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox"> Remember me
                                              </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" class="btn btn-danger">Sign in</button>
                    </div>
                  </div>
                </form>
              </div>
            </section>
            <section class="panel">

              <div class="panel-body">
                <a href="#myModal" data-toggle="modal" class="btn btn-primary">
                                  Form in Modal
                              </a>
                <a href="#myModal-1" data-toggle="modal" class="btn  btn-warning">
                                  Form in Modal 2
                              </a>
                <a href="#myModal-2" data-toggle="modal" class="btn  btn-danger">
                                  Form in Modal 3
                              </a>

                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Form Tittle</h4>
                      </div>
                      <div class="modal-body">

                        <form role="form">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile3">
                            <p class="help-block">Example block-level help text here.</p>
                          </div>
                          <div class="checkbox">
                            <label>
                                                          <input type="checkbox"> Check me out
                                                      </label>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Form Tittle</h4>
                      </div>
                      <div class="modal-body">

                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                              <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <div class="checkbox">
                                <label>
                                                                  <input type="checkbox"> Remember me
                                                              </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-info">Sign in</button>
                            </div>
                          </div>
                        </form>

                      </div>

                    </div>
                  </div>
                </div>
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Form Tittle</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-inline" role="form">
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control sm-input" id="exampleInputEmail5" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control sm-input" id="exampleInputPassword5" placeholder="Password">
                          </div>
                          <div class="checkbox">
                            <label>
                                                          <input type="checkbox"> Remember me
                                                      </label>
                          </div>
                          <button type="submit" class="btn btn-success">Sign in</button>
                        </form>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>



</form>


<form action="" method="post">
      <h1 class="text-center">Formulaire d'inscription</h1>
    
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