<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $bdd = require_once('../config/bdd.php');

    var_dump($bdd);

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $dn = $_POST["dn"];
    $email = $_POST["email"];
    $email2 = $_POST["email2"];
    $adresse = $_POST["adresse"];
    $tel = $_POST["tel"];
    $mdp = $_POST["mdp"];
    $mdp2 = $_POST["mdp2"];

 
    $sql = "INSERT INTO utilisateur(nom, prenom, dateNaissance, email, adresse, telephone, motDePasse)
            VALUES(:nom, :prenom, :dn, :email, :adresse, :tel, :mdp)";

    $requete = $bdd->prepare($sql);

    


    $requete->bindParam('nom', $nom, PDO::PARAM_STR);
    $requete->bindParam('prenom', $prenom, PDO::PARAM_STR);
    $requete->bindParam('dn', $dn, PDO::PARAM_STR);
    $requete->bindParam('email', $email, PDO::PARAM_STR);
    $requete->bindParam('adresse', $adresse, PDO::PARAM_STR);
    $requete->bindParam('tel', $tel, PDO::PARAM_STR);
    $requete->bindParam('mdp', $mdp, PDO::PARAM_STR);

    $requete->execute();


    

?>