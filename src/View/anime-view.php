<?php
echo "<p>
        <strong>Anime</strong> : "
        . $donnees['name_anime'] .
        "<br />L'anime a été créée par : "
        .$donnees['name_auteur'] .
        ", et fait partie des catégories : "
        . $donnees['type_anime'] .
        "<pre>   </pre>et genres : "
        . $donnees['genre_anime'] .
        "<br />Description : "
        . $donnees['description_anime'] . 
        "<br />Note : "
        . $donnees['mark_anime'] .
        "/5</p>";