<?php

    include '../model/bd.incr.user.php';
    
    $email = $_POST["Email"];
    $mdp = $_POST["Mdp"];
    $prenom = $_POST["Prenom"];
    $nom = $_POST["Nom"];

    if (form_Verif($email, $mdp, $prenom, $nom)) {

        connect_create_bd_user($email, $mdp, $prenom, $nom);
        Header('Location:../connexion.php');
    }
    else {
        Alert("Erreur dans la boîte de dialogue");
    }
    
    include '../vue/entete.html.php';
    include '../vue/connexion.php';
    include '../vue/registerUser.php';


?>


