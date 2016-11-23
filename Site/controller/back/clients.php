<?php
require('functions.php');


if(isset($_GET['m'])){
    modifier_cli();
    supprimer_cli();    
}elseif(isset($_GET['aj'])){
    ajouter_cli();
}elseif(isset($_GET['v'])) {
	valider_cli($_GET['v']);
}elseif(isset($_GET['s'])) {
	supp_cli($_GET['s']);
}

require('../../view/back/template/pages/clients.php');

?>