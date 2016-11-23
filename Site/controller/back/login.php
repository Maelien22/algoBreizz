<?php

require_once('../../model/back/admin.php');
require_once('../../view/back/template/pages/login.php');



if(isset($_POST['email']) AND isset($_POST['password'])){
    
    //récupération des informations du POST
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    //récupération de la fonction de connexion 
    $cnx = connexion($email,$password);

    if (false !== $cnx) { 

        // on crée la session
        $info = info($cnx);
        session_start();
        $_SESSION['id'] = $cnx;
        $_SESSION['username'] = $info['username'];
        $idmbr = $cnx; // id de l'admin
        $emailmbr = $email; // email de l'admin
        
        setcookie('id', $idmbr, time() + 2*24*3600, "/", null, false, true );
        setcookie('email', $emailmbr, time() + 2*24*3600, "/", null, false, true);

        header('Location: admin-index');
        exit();

    }else {
        echo 'Erreur de connexion ';
    }
    
}
?>