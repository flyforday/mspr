<?php
    require "../connexion.php";
    $sql = file_get_contents('20200406150927.sql');

    $res = $dbh->exec($sql);
    if (!$res) {
        echo "\nPDO::errorInfo():\n";
        print_r($dbh->errorInfo());
    }
    
/*

        $db = "mysql:host=localhost;dbname=foodest";
        $user = "root";
        $password = "";
        
        echo ($db);

        $dbh = new PDO($db,$user,$password);

        $recettes= $dbh->query(*SELECT * FROM recette");
        print_r(recettes);
        echo ("<pre>");
        foreach ($recettes as $r)
        {
			print_r($r);
        }

        echo ("</pre>")

*/