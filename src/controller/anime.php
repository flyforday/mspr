<?php
    require "../../../connexion.php";
    function listAnime(){
        // ici requeter la base de données pour récupérer les anime
        
        $reponse = $bdd->query('SELECT * FROM anime');
        $donnees = $reponse->fetch();
        while ($donnees = $reponse->fetch()){
        ?>
        <p>
        <strong>Anime</strong> : <?php echo $donnees['name_anime']; ?><br />
        L'anime a été créée par : <?php echo $donnees['name_auteur']; ?>, et fait partie des catégories : <?php echo $donnees['type_anime']; ?> <pre>   </pre>et genres : <?php echo $donnees['genre_anime']; ?><br />
        Description : <?php echo $donnees['description_anime']; ?> <br />
        Note : <?php echo $donnees['mark_anime']; ?>/5
        </p>
        <?php
        }

        $reponse->closeCursor(); // Termine le traitement de la requête
        // puis afficher une liste des animes
    }
    
    listAnime() // on appelle la fonction