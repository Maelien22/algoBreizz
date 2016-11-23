<?php

require('../../model/general/database.php');

function connexion($email, $password){

    global $bdd;
    $req = $bdd->prepare("SELECT * FROM admin WHERE email = :email AND password = :password");
    $req->bindValue(':email', $email);
    $req->bindValue(':password', $password);
    $req->execute();
       
    if ($result = $req->fetch(PDO::FETCH_ASSOC)) {

        $req->closeCursor();
        return $result['id'];

    }else{
        
    return false; 
    }
}

function info($cnx){
    
    global $bdd;
    
    $req = $bdd->prepare("SELECT email,username FROM admin WHERE id = :id");
    $req->bindValue(':id', $cnx);
    $req->execute();
    
    if ($result = $req->fetch(PDO::FETCH_ASSOC)) {

        $req->closeCursor();
        return $result;
    }
}

function deconnexion(){
    
    session_start();
    session_destroy();
    setcookie('id');
    setcookie('email');
    unset($_COOKIE['id']);
    unset($_COOKIE['email']);
    
}

function modif_profil($usernamenew, $email, $id){
    
    global $bdd;
    $modprofil = $bdd->prepare('UPDATE admin 
                           SET username  = :usernamenew, email = :email
                           WHERE  id = :id ');
    $modprofil->bindValue(':usernamenew', $usernamenew);
    $modprofil->bindValue(':email', $email);
    $modprofil->bindValue(':id', $id);
    $modprofil->execute();
    
}

function modif_pwd($id, $password){

    global $bdd;
    $req = $bdd->prepare('UPDATE admin 
                           SET password  = :password
                           WHERE  id = :id ');
    $req->bindValue(':password', $password);
    $req->bindValue(':id', $id);
    $req->execute();
}

function getinfo_user($id){
    global $bdd;
    $getinfo = $bdd->prepare('SELECT username, email FROM admin WHERE id = :id');
    $getinfo->bindValue(':id', $id);
    $getinfo->execute();
    
    $infuser = $getinfo->fetchAll();
    
    return $infuser;
    
    
}


?>