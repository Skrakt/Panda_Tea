<?php

include 'PDO.php';

connect_bd();

include "getRacine.php";
include "$racine/controleur/controleurPrincipal.php";

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} 
else {
    $action = "accueil";
}

$fichier = controleurPrincipal($action);
include "$racine/controleur/$fichier";

?>
     



