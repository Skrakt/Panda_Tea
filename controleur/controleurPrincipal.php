<?php

function controleurPrincipal($action) {
    $lesActions = array();
    
    $lesActions["accueil"] = "accueil.php";
    $lesActions["produits"] = "produits.php";
    $lesActions["apropos"] = "apropos.php";
    $lesActions["packs"] = "packs.php";
    $lesActions["forum"] = "forum.php";
    $lesActions["contact"] = "contact.php";
    $lesActions["connexion"] = "connexion.php";
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["accueil"];
    }
}

?>