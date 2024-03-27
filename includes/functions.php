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

?>