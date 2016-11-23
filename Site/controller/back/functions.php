<?php 

require_once('../../model/back/function.php');

$p = affiche_prod();
$c = cat();
$ca = affiche_cat();
$cat = affiche_cat();
$clients = clients(1);
$nclients = clients(0);


if(isset($_GET['m'])){
$n = $_GET['m'];
$vueprod = vue_produit($n);
$vuecli = vue_client($n); 
}

function ajouter_pro(){
    if(isset($_POST['nom']) AND isset($_POST['prixht'])){

        $nom = $_POST['nom'];
        $descripc = $_POST['descrip_courte'];
        $descrip = $_POST['descrip'];
        $cat = $_POST['cat_id'];
        $prixht = $_POST['prixht'];
        $tva = $_POST['tva'];
        $prixttc = $prixht * (1 + ($tva/100)); 
        $num = rand();



        ajouter_prod($nom,$descripc,$descrip,$cat,$prixht,$tva,$prixttc,$num);
        ?> 
        <meta http-equiv="refresh" content="0;URL=admin-produit">
    <?php    
    }else {
       // header('Location: admin-login?erreur=vatefairefoutre');
    }
}

function modifier_pro(){

    if(isset($_POST['modifier'])){
        $nom = $_POST['nom'];
        $descripc = $_POST['descrip_courte'];
        $descrip = $_POST['descrip'];
        $cat = $_POST['cat_id'];
        $prixht = $_POST['prixht'];
        $tva = $_POST['tva'];
        $prixttc = $prixht * (1 + ($tva/100)); 
        $num = $_POST['num'];
        modifier_prod($nom,$descripc,$descrip,$cat,$prixht,$tva,$prixttc,$num);
        ?> 
        <meta http-equiv="refresh" content="0;URL=admin-produit">
    <?php
    }
}


function supprimer_pro(){
    
    if(isset($_POST['supprimer'])){
        $num = $_POST['num'];
        supprimer_prod($num);
        ?> 
        <meta http-equiv="refresh" content="0;URL=admin-produit">
    <?php
    }
    
}



/***** Clients *****/

function ajouter_cli(){

    if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $adresse = $_POST['adresse'];
        $tel = $_POST['telephone'];

        ajouter_cl($nom,$prenom,$email,$adresse,$tel);
        ?> 
        <meta http-equiv="refresh" content="0;URL=admin-clients">
    <?php
    }
}

function modifier_cli(){

    if(isset($_POST['modifier'])){
        $id =$_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $adresse = $_POST['adresse'];
        $tel = $_POST['telephone'];

        modifier_cl($id,$nom,$prenom,$email,$adresse,$tel);
        ?> 
        <meta http-equiv="refresh" content="0;URL=admin-clients">
    <?php
    }
}

function valider_cli($id){

        valider_cl($id);
        ?> 
        <meta http-equiv="refresh" content="0;URL=admin-clients">
    <?php
}

function supp_cli($id){

        supprimer_cl($id);
        ?> 
        <meta http-equiv="refresh" content="0;URL=admin-clients">
    <?php
}

function supprimer_cli(){
    
    if(isset($_POST['supprimer'])){
        $id = $_POST['id'];
        supprimer_cl($id);
        ?> 
        <meta http-equiv="refresh" content="0;URL=admin-clients">
    <?php
    } 
}


function ajouter_cat(){
    
    if(isset($_POST['nom'])){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $id_parent = $_POST['id_parent'];

        ajouter_cate($nom,$description,$id_parent);

        ?> 
        <meta http-equiv="refresh" content="0;URL=admin-categorie">
        <?php    
    }else {
       // header('Location: admin-login?erreur=vatefairefoutre');
    }
}

function modifier_cat(){

    if(isset($_POST['nom'])){
        $id = $_POST['nom'];
        $descripc = $_POST['descrip_courte'];
        $descrip = $_POST['descrip'];
        $cat = $_POST['cat_id'];
        $prixht = $_POST['prixht'];
        $tva = $_POST['tva'];
        $prixttc = $prixht * (1 + ($tva/100)); 
        $num = $_POST['num'];
        modifier_cat($nom,$descripc,$descrip,$cat,$prixht,$tva,$prixttc,$num);
        ?> 
        <meta http-equiv="refresh" content="0;URL=admin-produit">
    <?php
    }
}

?>