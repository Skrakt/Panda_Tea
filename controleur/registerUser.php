<?php

    include '../model/bd.incr.user.php';
    
    $email = $_POST["Email"];
    $mdp = $_POST["Mdp"];
    $prenom = $_POST["Prenom"];
    $nom = $_POST["Nom"];

    connect_bd_user($email, $mdp, $prenom, $nom);
    
?>


