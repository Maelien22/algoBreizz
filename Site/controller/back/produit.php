<?php
require('functions.php');



if(isset($_GET['m'])){

    modifier_pro();
    supprimer_pro();
    
}else{
    ajouter_pro();
}

require('../../view/back/template/pages/produits.php');

?>