<?php
require "src/connexion.php";

public function getUtilisateur($pseudo){
    global $dbh;
    $q = $dbh->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo");

    $res = $q->execute(["pseudo" => $pseudo]);
    return $res;
}
?>