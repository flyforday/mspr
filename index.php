<!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Animetrice</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="http://localhost/mspr/public/css/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/x-icon" href="http://localhost/mspr/public/img/logo/animetrice.png">
    </head>



  <body>
  <?php include "src/View/header.php"; /*header*/
        include "src/View/slider.php"; /*Slider*/
      ?> 
<div class="anime">

    <h1>Nos animes</h1>
        <div class="poster">

              <div class="left">


                  <a href="src/View/one-piece.php"><p><img src="public/img/poster/one-piece.jpg"></p></a>
                  <a href="src/View/one-piece.php"><p>One piece</p></a>
                                          <p>Forum</p>

              </div>



              <div class="center">
                  <a href="src/View/demon-slayer.php"><p><img src="public/img/poster/demon-slayer.jpg"></p></a>   
                  <a href="src/View/demon-slayer.php"><p>Demon Slayer</p></a>
                                             <p>Forum</p>
              
              </div>

            

              <div class="right">
              <a href="src/View/beastars.php"><p><img src="public/img/poster/beastars.jpg"></p></a>
              <a href="src/View/beastars.php"><p>Beastars</p></a>
                                     <p>Forum</p>
              
              </div>

              
        </div>
</div>

<div class="regist">
<div class="registtitle">
<h1>Pas encore inscrit?</h1>
</div>
<div class="registdescription">
<p>Rejoignez la communauté des animetrices. On est fait pour s'amuser et partager notre passion pour les animés</p>
</div>
    <div class="registbutton">
            <p><a href="src/View/inscription.html"><button type="submit">S'inscrire</button></a></p>
    </div>
</div>
</body>
</html>