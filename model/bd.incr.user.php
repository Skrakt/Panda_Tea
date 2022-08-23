<?php 

include 'PDO.php';

function connect_create_bd_user($email, $nom, $prenom, $mdp){

    session_start();

    $connect = connect_bd();

    $Set = $connect->prepare("
    INSERT INTO user(Email, Nom, Prenom, Password)
    VALUES(:Email, :Nom, :Prenom, :Password)");

    $Set->bindParam(':Email', $email);
    $Set->bindParam(':Nom', $nom);
    $Set->bindParam(':Prenom', $prenom);
    $Set->bindParam(':Password', $mdp);

    $Set->execute();
    
    Header("Location:../index.php");

}

function form_Verif($email, $mdp, $prenom, $nom ) {

    $errEmail = "";
    $errMdp = "";
    $errPrenom = "";
    $errNom = "";

    function verif_email ($email) {

        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

        if (preg_match($pattern, $email)) { 

            Alert("Email valide"); 
            return true;
        } 

        else { 
            Alert("Email incorrect"); 
            return false;
        } 
    }
        
    if ((verif_email($email)) || (strcmp($email, $errEmail) !=0 )){
        
    }
    else  { Alert("Email incorrect"); return false; }

    if (strcmp($mdp, $errMdp) !=0 ) {
        Alert("Mdp incorrect");
        return false;
    }

    if (strcmp($prenom, $errPrenom) !=0 ) {
        Alert("Prénom incorrect");
        return false;
    }

    if (strcmp($nom, $errNom) !=0 ) {
        Alert("Nom incorrect");
        return false;
    }

    return true ;
}
?>