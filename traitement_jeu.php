<?php
include_once "footer.php";
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
    <link rel="stylesheet" href="CSS/style.css">
    <title>Portail de jeux de société d'IF3</title>
</head>
<body>
    <h5>Votre ajout de jeu a bien été enregistré ! Merci de votre contribution ! ヽ(>∀<☆)ノ<h5>
</body>
</html>