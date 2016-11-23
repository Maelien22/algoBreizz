<doctype html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <meta http-equiv="content-language" content="fr">
    <meta name="language" content="fr">
    
    <link rel="stylesheet" type="text/css" href="inscription.css">
    <script type="text/javascript" src="inscription.js"></script>
</head>


<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">inscription </a></li>
        <li class="tab"><a href="#login">connexion</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Inscription</h1>
          
          <form action="/" method="post">
          
          <div>
            <div id="nom">
              <label> Nom : </label> 
              <input type="text" required autocomplete="off" />
            </div>
        
            <div id="prenom">
              <label> Prénom : </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div id="email">
            <label> Email : </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div id="mdp">
            <label> Mot de passe : </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <div id="rmdp">
            <label> Resaisir Mot de passe : </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
      </div><!-- tab-content --> 
</div> <!-- /form -->