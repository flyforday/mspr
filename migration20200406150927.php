<?php
    require "connexion.php";
    $sql = file_get_contents('20200406150927.sql');

    $res = $dbh->exec($sql);
    if (!$res) {
        echo "\nPDO::errorInfo():\n";
        print_r($dbh->errorInfo());
    }