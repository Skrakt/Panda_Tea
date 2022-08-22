<?php 

include '../PDO.php';

function connect_bd_user($email, $nom, $prenom, $mdp){

    
    include '../getRacine.php';

    session_start();

    $connect = connect_bd();


    $sth = $connect->prepare("
    INSERT INTO user(Email, Nom, Prenom, Password)
    VALUES(:Email, :Nom, :Prenom, :Password)");

    $sth->bindParam(':Email', $email);
    $sth->bindParam(':Nom', $nom);
    $sth->bindParam(':Prenom', $prenom);
    $sth->bindParam(':Password', $mdp);

    $sth->execute();
    
    Header("Location:../index.php");

    

}
?>