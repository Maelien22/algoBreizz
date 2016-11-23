<?php 
require('functions.php');



if(isset($_GET['m'])){

    modifier_cat();
    
}else{
    ajouter_cat();
}
require('../../view/back/template/blabla/pages/categories.php');


?>