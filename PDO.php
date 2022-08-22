<?php

    function connect_bd(){

    $dbh = "mysql:host=localhost;dbname=pandatea";
    $user = "root";
    $pass = "";

    try{
      $connexion=new PDO($dbh, $user, $pass);
    }

    catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit();
    }

    return $connexion;
}

?>