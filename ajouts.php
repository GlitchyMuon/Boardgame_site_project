<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css" />
    <title>Ajouts d'un jeu</title>
</head>
<body>
    <a href="home.php">
    <img src="CSS/img/home_button.png" alt="Bouton Home" style="width:82px;height:42px;">
    </a>
        <h1>Formulaire d'ajout d'un jeu</h1>
        <form method="post" action="post">
        <fieldset  style="padding-left:75px;border:2px dotted;border-color: darksalmon">
            <legend>Vos coördonnées</legend>
                <p><label for="user">Votre pseudo : </label><input type="text" name="user" id="user" size="30" maxlength="15" required autofocus /></p>
            
                <p><label for="email">Votre e-mail : </label><input type="email" name="email" id="email" placeholder="Ex : username@gmail.com" size="30" maxlength="30" required /></p>
        </fieldset>

        <fieldset style="padding-left:75px;border:2px dashed darksalmon">
            <legend style="font-weight: bold">Description des éléments du jeu</legend>
            <p><label for="game_name">Nom du jeu : </label><input type="text" name="game_name" id="user" size="100" maxlength="100" required autofocus /> </p>

            <p><label for="game_descrpt"> Description du jeu : </label><br/><br/>
                            <textarea name="game_descrpt" id="descrpt" cols= 60 rows = 20 style="font-family: 'Corbel','Candara'">Alors le but du jeu c'est de tuer tous les lemmings ou d'arriver à les faire sauter de la falaise ! Dans tous les cas ils doivent MOURIR !!!
                            </textarea></p>
            <p><label for="min_player">Nombre minimum de joueurs : </label><input type="number" name="min_player" id="min_player" min="1" /></p>
            <p><label for="max_player">Nombre maximum de joueurs : </label><input type="number" name="max_player" id="max_player" min="1" /></p>
            
           
        </fieldset>
        
        </form>
</body>
</html>