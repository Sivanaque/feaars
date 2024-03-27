<?php

// Générer un mot de passe 
function generate_mdp() 
{
    $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@&;-?^,";
    $mdp = "";

    $mdp .= $string[rand(26,51)];
    $mdp .= $string[rand(26,51)];

    $mdp .= $string[rand(0,25)];
    $mdp .= $string[rand(0,25)];

    $mdp .= $string[rand(52,61)];
    $mdp .= $string[rand(52,61)];

    $mdp .= $string[rand(62,69)];
    $mdp .= $string[rand(62,69)];
    
    $mdp = str_shuffle($mdp);

    return $mdp;
}


function connection_bdd($db_name,$user,$mdp)
{
    try {
        $bdd = new PDO("mysql:host=localhost;dbname=$db_name;charset=utf8", "$user","$mdp");
        return $bdd;
    }

    catch (Exception $e){
        die('<b>Erreur</b> : ' . $e->getMessage());
    }
}

function logout() {
    session_start();
    $_SESSION = array();
    session_destroy();//fermeture session
    header("Location: index.php");
}

?>