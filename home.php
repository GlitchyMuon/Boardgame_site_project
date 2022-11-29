<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Portail de jeux de société d'IF3</title>
</head>
<body>
    <h1>Bienvenue sur notre plateforme de partage de jeux de société !</h1>

    <h2>Nos jeux partagés</h2>
</body>
</html>

<?php
    include_once "nav.php";
    include_once "JeuModel.php";
    

    $model = new JeuModel();
    $toutLesJeux = $model->getAllGames();
    foreach ($toutLesJeux as $unJeu){
        echo "<h3>Nom du jeu : $unJeu->nom</h3>";
            
        echo "<h4>Description : </h4> $unJeu->description
            <h4>Nombre minimum de joueurs : $unJeu->min_joueurs</h4> 
            <h4>Nombre maximum de joueurs : $unJeu->max_joueurs</h4></br></br>";
    }
?>
               
        

            
      