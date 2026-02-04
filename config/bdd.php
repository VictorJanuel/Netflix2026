<?php
    $config = require_once "./identifiant.php";


    $bdd = new PDO(
        "mysql:".$config["db_host"].";dbname=".$config["db_name"].";charset=".$config["db_code"]."",
        $config["DB_user"],
        $config["DB_pass"]);
?>