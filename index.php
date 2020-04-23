<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MSPR Site d'animé</title>
</head>
<body>
    <h1>Site d'animé</h1>
    <a href="index.php?page=migration">Migration</a>
    <a href="index.php?page=fixture">Ajout de donnée</a>
    <a href="index.php?page=anime">Affichage liste animé</a>
    <?php
        require_once "src/connexion.php";

        if (isset($_GET["page"]) and $_GET["page"] == "migration" ) {
            require_once "src/Migration/migration20200406150927.php";
        }
        if (isset($_GET["page"]) and $_GET["page"] == "fixture" ) {
            require_once "src/Fixture/fixtures.php";
        }
        
        /*$recette = $dbh->query("SELECT *
                            FROM 
                            recette");
        print_r($recette);
        echo("<pre>");
        foreach ($recette as $n) {
            print_r($n);
        }
        echo("<pre>");*/
        if (isset($_GET["page"]) and $_GET["page"] == "anime" ) {
            require_once "src/Controller/anime.php";
            // puis afficher une liste des animes
            listAnime(); // on appelle la fonction
        }
    ?>
</body>
</html>