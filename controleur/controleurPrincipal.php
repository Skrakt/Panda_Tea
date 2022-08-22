<?php

function controleurPrincipal($action) {
    $lesActions = array();
    
    $lesActions["accueil"] = "accueil.php";
    $lesActions["produits"] = "produits.php";
    
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["accueil"];
    }
}

?>