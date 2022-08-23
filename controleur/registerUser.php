<?php

    include '../model/bd.incr.user.php';
    
    $email = $_POST["Email"];
    $mdp = $_POST["Mdp"];
    $prenom = $_POST["Prenom"];
    $nom = $_POST["Nom"];

    if (form_Verif($email, $mdp, $prenom, $nom)) {

        connect_create_bd_user($email, $mdp, $prenom, $nom);
        Header('Location:../connexion.php');
        exit();
    }
    else {
        echo "<script> location.href='../controleur/connexion.php'; </script>";
        Header('Location:../controleur/connexion.php');
        Alert("Erreur dans la boîte de dialogue");
        exit();
    }
    


?>


