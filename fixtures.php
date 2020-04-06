<?php
    require "connexion.php";
    $sql = file_get_contents('fixtures.sql');
    /*$sql = "
            INSERT INTO `unite` (`id`, `nom`) VALUES (1, 'kg'),(2, 'g'),(5, 'l');

            INSERT INTO `aliment` (`nom`, `calorie`, `unite_id`, `id`) VALUES ('choux', 50, 1, 1),('saucisse', 500, 1, 2),('pomme de terre', 200, 1, 3);

            INSERT INTO `recette` (`nom`, `synonyme`, `id`, `temps_preparation`, `temps_cuisson`, `image`, `difficulte`) VALUES ('choucroute', 'choux pas cool', 1, 50, 20, 'https://cdn.lacuisinedannie.com/images/45.jpg', 2);

            INSERT INTO `aliment_recette` (`aliment_id`, `recette_id`, `quantite`) VALUES (1, 1, 0.5),(3, 1, 0.2),(2, 1, 0.2);

            INSERT INTO `etape` (`titre_etape`, `image`, `description`, `ordre`, `id`, `recette_id`) VALUES ('Laver les aliments', 'https://i.ytimg.com/vi/IklQGy5ufZ4/hqdefault.jpg', 'Lavez la choucroute à l\'eau froide jusqu\'à obtenir une eau claire. Égouttez-la puis pressez-la pour éliminer toute l\'eau.', 1, 1, 1),('Blanchir les aliments', 'https://i.ytimg.com/vi/IklQGy5ufZ4/hqdefault.jpg', 'Blanchissez les morceaux 5 minutes dans de l\'eau bouillante : palette, jambonneau, lard et carré de porc. Passez-les sous l\'eau froide et égouttez-les.', 2, 2, 1);
            
            ";*/
    //$res = $dbh->exec($sql);
    try {
        $dbh->beginTransaction();
    
        $res = $dbh->exec($sql);
    
        $dbh->commit();
    } catch(Exception $e) {
        $dbh->rollback();
        throw $e;
    }
    //req 1
    //$tabunite = [["1","kg"],["2","g"],["3","L"],["4","cl"],["5","mL"],["5","cl"],];
    //$req = $dbh->prepare("INSERT INTO unite (id, nom) VALUES (:id, :nom);");
    //$unite = "g";
    //$id = "2";
    //$req->bindParam(":id", $id);
    //$req->bindParam(":nom", $unite);
    //$req->execute();
    //for ($i=0 ; $i < count($tabunite) ; $i++) { 
    //    $req = $dbh->prepare("INSERT INTO unite (id, nom) VALUES (:id, :nom);");
    //    $tab1 = $tabunite[$i];
    //    $req->bindParam(":id", $tab1[0]);
    //    $req->bindParam(":nom", $tab1[1]);
    //    $req->execute();
    //}
    if (!$res) {
        echo "\nPDO::errorInfo():\n";
        print_r($dbh->errorInfo());
    }
    var_dump($sql);