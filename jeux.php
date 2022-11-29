<?php

include_once "JeuModel.php";
include_once "Jeu.php";



$formSubmission = isset(
        // $_POST["user"],
        $_POST["game_name"],
        $_POST["description"],
        $_POST["min_players"],
        $_POST["max_players"]);

if($formSubmission){    //ce qui se trouve au $ fait référence au contenu de l'attribut name des input dans jeux.php en dessous

    // $pseudo = $_POST["user"];
    $nom = $_POST["game_name"];
    $description = $_POST["description"];
    $min_joueurs = $_POST["min_players"];
    $max_joueurs = $_POST["max_players"];

    $newGame = new Jeu($nom, $description, $min_joueurs, $max_joueurs);
    $model = new JeuModel();
    $model->addGame($newGame);

    // header("Location:index.php?view=allgames");
}
// }else {      //sinon ça rentre direct dans else et affiche 404 dans la barre de nav. Mais sans, on voit le formulaire et le texte d'envoi mais ne rentre pas dans la db
//     header("Location:index.php?view=404");
// }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>Ajouts d'un jeu</title>
</head>
<body>
        <a href="home.php">
        <img src="CSS/img/home_button.png" alt="Bouton Home" style="width:82px;height:42px;">
        </a>
            <h1>Formulaire d'ajout d'un jeu</h1>
            <form method="post" action="traitement_jeu.php" method="post">
            <fieldset  style="padding-left:75px;border:2px dotted;border-color: darksalmon">
                <!-- <legend>Vos coördonnées</legend>
                    <p><label for="user">Votre pseudo : </label><input type="text" name="user" id="user" size="30" maxlength="15" required autofocus /></p> -->
            </fieldset>

            <fieldset style="padding-left:75px;border:2px dashed darksalmon">
                <legend style="font-weight: bold">Description des éléments du jeu</legend>
                <p><label for="game_name">Nom du jeu : </label><input type="text" name="game_name" id="user" size="100" maxlength="100" required autofocus /> </p>

                <p><label for="description"> Description du jeu : </label><br/><br/>
                                <textarea name="description" id="description" cols= 60 rows = 20 style="font-family: 'Corbel','Candara'">Alors le but du jeu c'est de tuer tous les lemmings ou d'arriver à les faire sauter de la falaise ! Dans tous les cas ils doivent MOURIR !!!
                                </textarea></p>
                <p><label for="min_players">Nombre minimum de joueurs : </label><input type="number" name="min_players" id="min_players" min="1" /></p>
                <p><label for="max_players">Nombre maximum de joueurs : </label><input type="number" name="max_players" id="max_players" min="1" /></p>
                
            
            </fieldset><br/>
            
            <input type="submit" formaction="traitement_jeu.php" value="Envoyer"/>
        </form>
    </body>
</html>