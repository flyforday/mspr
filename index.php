<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MSPR Site d'animé</title>
</head>
<body>
    <h1>Site d'animé</h1>
    <?php
        require "connexion.php";
        $recette = $dbh->query("SELECT *
                            FROM 
                            recette");
        print_r($recette);
        echo("<pre>");
        foreach ($recette as $n) {
            print_r($n);
        }
        echo("<pre>");
    ?>
</body>
</html>