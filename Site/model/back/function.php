<?php

require('../../model/general/database.php');

/***** Catégories *****/
function affiche_cat(){
    
    global $bdd;
    $req = $bdd->query('SELECT * FROM categorie WHERE id_parent = 0');
    $cat = $req;
    return $cat;
}

function cat(){
    
    global $bdd;
    $req = $bdd->query('SELECT * FROM categorie');
    $cate = $req;
    return $cate;
}

function ajouter_cate($nom,$description,$id_parent){
    
    global $bdd;    
    $req = $bdd->prepare('INSERT INTO categorie(nom, description, id_parent) VALUES(:nom, :description, :id_parent)');
    $req->execute(array('nom' => $nom, 'description' => $description, 'id_parent' => $id_parent));
    
}

function modifier_cate($nom,$description,$id_parent,$id){
    
    global $bdd;    
    $req = $bdd->prepare('UPDATE categorie 
                        SET nom = :nom,
                        description = :description,
                        id_parent = :id_parent
                        WHERE id = :id ');
    $req->execute(array('nom' => $nom, 'description' => $description, 'id' => $id ));
    
}


/***** Produits *****/
function vue_produit($num){
    
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM produit WHERE num = :num');
    $req->bindValue(':num', $num);
    $req->execute();
    return $req;
}

function affiche_prod(){
    
    global $bdd;
    $req = $bdd->query('SELECT produit.id, produit.nom, produit.descrip_courte, produit.descrip, produit.prix_ht, produit.prix_ttc, produit.tva, categorie.nom AS cat, produit.num FROM `produit` INNER JOIN categorie ON produit.cat_id = categorie.id');
    $pro = $req;
    return $pro;
}

function ajouter_prod($nom,$descripc,$descrip,$cat,$prixht,$tva,$prixttc,$num){
    
    global $bdd;    
    $req = $bdd->prepare('INSERT INTO produit(nom, descrip_courte, descrip, cat_id, prix_ht, prix_ttc, tva, num) VALUES(:nom, :descrip_courte, :descrip, :cat_id, :prix_ht, :prix_ttc, :tva, :num)');
    $req->execute(array('nom' => $nom, 'descrip_courte' => $descripc, 'descrip' => $descrip, 'cat_id' => $cat , 'prix_ht' => $prixht , 'prix_ttc' => $prixttc, 'tva' => $tva, 'num' => $num ));
    
}

function modifier_prod($nom,$descripc,$descrip,$cat,$prixht,$tva,$prixttc,$num){
    
    global $bdd;    
    $req = $bdd->prepare('UPDATE produit 
                        SET nom = :nom,
                        descrip_courte = :descrip_courte,
                        descrip = :descrip,
                        cat_id = :cat_id,
                        prix_ht = :prix_ht,
                        prix_ttc = :prix_ttc,
                        tva = :tva
                        WHERE num = :num ');
    $req->execute(array('nom' => $nom, 'descrip_courte' => $descripc, 'descrip' => $descrip, 'cat_id' => $cat , 'prix_ht' => $prixht , 'prix_ttc' => $prixttc, 'tva' => $tva, 'num' => $num ));
    
}

function supprimer_prod($num){
    
    global $bdd;
    $req = $bdd->prepare('DELETE FROM produit WHERE num = :num');
    $req->bindValue(':num', $num);
    $req-> execute();
    return $req;
}

/***** Clients *****/
function clients($valide){
    
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM clients WHERE valide = :valide');
    $req->bindValue(':valide', $valide);
    $req-> execute();
    return $req;
}

function vue_client($id){
    
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM clients WHERE id = :id');
    $req->bindValue(':id', $id);
    $req->execute();
    return $req;
}

function modifier_cl($id,$nom,$prenom,$email,$adresse,$tel){
    
    global $bdd;    
    $req = $bdd->prepare('UPDATE clients 
                        SET nom = :nom,
                        prenom = :prenom,
                        email = :email,
                        adresse = :adresse,
                        telephone = :tel
                        WHERE id = :id ');
    $req->execute(array('nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'adresse' => $adresse , 'tel' => $tel , 'id' => $id));
    
}

function valider_cl($id){
    
    global $bdd;
    $req = $bdd->prepare('UPDATE clients SET valide = 1 WHERE id = :id');
    $req->bindValue(':id', $id);
    $req-> execute();
}

function supprimer_cl($id){
    
    global $bdd;
    $req = $bdd->prepare('DELETE FROM clients WHERE id = :id');
    $req->bindValue(':id', $id);
    $req-> execute();

}
?>