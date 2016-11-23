<<<<<<< HEAD
<doctype html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <meta http-equiv="content-language" content="fr">
    <meta name="language" content="fr">
    
</head>

<body>
<div class="form">
      <div class="tab-content">
        <div id="signup">   
          <h1>Demande d'inscription</h1>
          <form id="inscription" method="post">
            <fieldset>
              <legend>Votre identité</legend>
                <li>
                  <label> Email : </label>
                  <input type="email" name="email" required autocomplete="off"/>
                </li>               
                <li>                  
                  <label> Nom : </label> 
                  <input type="text" name="nom" required autocomplete="off" />
                </li>
                <li>
                  <label> Prénom : </label>
                  <input type="text" name="prenom" required autocomplete="off"/>
                </li>
                <li> 
                  <label> Téléphone : </label>
                  <input type="tel" name="telephone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required autocomplete="off"/>
                </li>
                <!--<li> 
                  <label> Adresse : </label>
                  <textarea type="adresse" rows="6" cols="50" ></textarea>
                </li>-->
               <button type="submit" name="inscrit" class="button button-block"/>Inscription</button>
            </fieldset>  
          </form>
          
 
          </form>
          <?php 
          
          try{
            $db = new PDO('mysql:host=localhost;dbname=db_algobreizh', 'root', '');
            }
            catch(Exception $e)
            {
                echo 'Erreur : '.$e->getMessage().'<br />';
            }

             if(isset($_POST['inscrit'])){
              $mail = $db->query('SELECT CLI_MAIL FROM clients WHERE CLI_MAIL = "'.$_POST['email'].'" ');


                  $nom = htmlspecialchars($_POST['nom']);
                  $prenom = htmlspecialchars($_POST['prenom']);
                  $email = htmlspecialchars($_POST['email']);
                  $tel = htmlspecialchars($_POST['telephone']);
                  $email = htmlspecialchars($_POST['email']);
                  //$adresse = htmlspecialchars($_POST['adresse']);

                  $req = "INSERT INTO clients (CLI_NOM,CLI_PRENOM,CLI_MAIL,CLI_TEL) VALUES ('".$nom."','".$prenom."', '".$email."', '".$tel."')";         
                  $res = $db->prepare($req);
                      $res->bindValue(':nom', $nom, PDO::PARAM_STR);
                      $res->bindValue(':prenom', $prenom, PDO::PARAM_STR);
                      $res->bindValue(':email', $email, PDO::PARAM_STR);
                      $res->bindValue(':telephone', $tel, PDO::PARAM_STR);
                      //$res->bindValue(':adresse', $adresse, PDO::PARAM_STR);
                        $res->execute();
      
                      echo'<h1>Inscription terminée</h1>';
                echo'<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['prenom'])).' vous êtes maintenant inscrit sur notre Site </p>';
             }
          ?>
        </div>
      </div>
=======
<doctype html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <meta http-equiv="content-language" content="fr">
    <meta name="language" content="fr">
    
</head>

<body>
<div class="form">
      <div class="tab-content">
        <div id="signup">   
          <h1>Demande d'inscription</h1>
          <form id="inscription" method="post">
            <fieldset>
              <legend>Votre identité</legend>
                <li>
                  <label> Email : </label>
                  <input type="email" name="email" required autocomplete="off"/>
                </li>               
                <li>                  
                  <label> Nom : </label> 
                  <input type="text" name="nom" required autocomplete="off" />
                </li>
                <li>
                  <label> Prénom : </label>
                  <input type="text" name="prenom" required autocomplete="off"/>
                </li>
                <li> 
                  <label> Téléphone : </label>
                  <input type="tel" name="telephone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required autocomplete="off"/>
                </li>
                <!--<li> 
                  <label> Adresse : </label>
                  <textarea type="adresse" rows="6" cols="50" ></textarea>
                </li>-->
               <button type="submit" name="inscrit" class="button button-block"/>Inscription</button>
            </fieldset>  
          </form>
          
 
          </form>
          <?php 
          
          try{
            $db = new PDO('mysql:host=localhost;dbname=db_algobreizh', 'root', '');
            }
            catch(Exception $e)
            {
                echo 'Erreur : '.$e->getMessage().'<br />';
            }

             if(isset($_POST['inscrit'])){
              $mail = $db->query('SELECT CLI_MAIL FROM clients WHERE CLI_MAIL = "'.$_POST['email'].'" ');


                  $nom = htmlspecialchars($_POST['nom']);
                  $prenom = htmlspecialchars($_POST['prenom']);
                  $email = htmlspecialchars($_POST['email']);
                  $tel = htmlspecialchars($_POST['telephone']);
                  $email = htmlspecialchars($_POST['email']);
                  //$adresse = htmlspecialchars($_POST['adresse']);

                  $req = "INSERT INTO clients (CLI_NOM,CLI_PRENOM,CLI_MAIL,CLI_TEL) VALUES ('".$nom."','".$prenom."', '".$email."', '".$tel."')";         
                  $res = $db->prepare($req);
                      $res->bindValue(':nom', $nom, PDO::PARAM_STR);
                      $res->bindValue(':prenom', $prenom, PDO::PARAM_STR);
                      $res->bindValue(':email', $email, PDO::PARAM_STR);
                      $res->bindValue(':telephone', $tel, PDO::PARAM_STR);
                      //$res->bindValue(':adresse', $adresse, PDO::PARAM_STR);
                        $res->execute();
      
                      echo'<h1>Inscription terminée</h1>';
                echo'<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['prenom'])).' vous êtes maintenant inscrit sur notre Site </p>';
             }
          ?>
        </div>
      </div>
>>>>>>> origin/master
    </div>