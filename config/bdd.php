<?php

    $config = require_once('identifiant.php');


try{
    $bdd = new PDO(
        "mysql:host=".$config["db_host"].";dbname=".$config["db_name"].";charset=".$config["db_code"]."",
        $config["db_user"],
        $config["db_pass"],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

}catch(PDOException $e) {
    die("Erreur PDO : " . $e->getMessage());
}

    return $bdd;
?>