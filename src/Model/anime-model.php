<?php
    require_once "src/connexion.php";
    global $dbh;
    $reponse = $dbh->query('SELECT * FROM anime');