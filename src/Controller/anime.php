<?php
    function listAnime(){
        // ici requeter la base de données pour récupérer les anime
        require_once "src\Model\anime-model.php";
        while ($donnees = $reponse->fetch()){
        require "src\View\anime-view.php";
        }

        $reponse->closeCursor(); // Termine le traitement de la requête
    }
    