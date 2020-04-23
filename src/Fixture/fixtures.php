<?php
require_once "src\connexion.php";

/*$sql = file_get_contents('fixtures.sql');*/



$sql = file_get_contents('src\Fixture\fixtures_anime.sql');

try {
    $dbh->beginTransaction();

    $res = $dbh->exec($sql);

    $dbh->commit();
} catch(Exception $e) {
    $dbh->rollback();
    print_r($dbh->errorInfo());
    throw $e;
}

/*
if (!$res) {
  echo "\nPDO::errorInfo():\n";
  print_r($dbh->errorInfo());
}*/
?>