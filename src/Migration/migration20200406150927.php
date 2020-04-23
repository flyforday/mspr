<?php
    require_once "src\connexion.php";
    $sql = file_get_contents('src\Migration\20200406150927.sql');
    /*if (!$res) {
        echo "\nPDO::errorInfo():\n";
        print_r($dbh->errorInfo());
    }*/
    try {
        $dbh->beginTransaction();
    
        $res = $dbh->exec($sql);
        print_r($dbh->errorInfo());
        $dbh->commit();
    } catch(Exception $e) {
        $dbh->rollback();
        print_r($dbh->errorInfo());
        throw $e;
    }