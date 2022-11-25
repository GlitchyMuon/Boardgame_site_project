<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css" />
    <title>Contact</title>
</head>
<body>
    <a href="home.php">
    <img src="CSS/img/home_button.png" alt="Bouton Home" style="width:82px;height:42px;">
    </a>
    <h1>Contact</h1>

    <form action="post_contact.php" method="post">
        <fieldset  style="padding-left:75px;border:2px dotted;border-color: darksalmon">
            <legend>Vos coördonnées</legend>
        
                <p><label for="user">Votre pseudo</label> : <input type="text" name="user" id="user" size="30" maxlength="15" required autofocus /></p>
            
                <p><label for="email">Votre e-mail</label> : <input type="email" name="email" id="email" placeholder="Ex : username@gmail.com" size="30" maxlength="30" required /></p>
        </fieldset>

        <fieldset style="padding-left:75px;border:2px dashed darksalmon">
            <legend style="font-weight: bold">Votre souhait</legend>
                    <p>
                        <label for="raison" style="font-weight: bold">Pour quelle raison nous contactez-vous ?</label><br />
                        <select name="raison" id="raison">
                            <optgroup label="Commentaires positifs">
                                <option value="suggestions">J'ai des suggestions, conseils.</option>
                                <option value="guestbook">Je voudrais laisser un mot dans le livre d'or ! [sera affiché sur le site]</option>
                                <option value="thanks">J'ai des remerciements à faire.</option>
                            </optgroup>
                            <optgroup label="Plaintes, critiques">
                                <option value="complain">J'ai des plaintes, remarques à faire !</option>
                            </optgroup>
                        </select>
                    </p>

                        <label for="improve">Vos commentaires, suggestions, complaintes : </label><br />
                            <textarea name="improve" id="ameliorer" cols= 60 rows = 20 style="font-family: 'Corbel','Candara'">Améliorer ton site ? M'enfin il est déjà génialissime tel quel ! Quel générosité d'avoir mis en place cette plateforme ! Milles merci !!!
                            </textarea>
                                
                                <p><strong>Cochez le type d'utilisateur IF3 : <br /></strong>
                                    <input type="radio" name="user_type" value="staff" id="staff"/> <label for="staff">Staff</label><br />
                                    <input type="radio" name="user_type" value="intern" id="intern" /> <label for="intern">Stagiaire en cours</label><br />
                                    <input type="radio" name="user_type" value="alumni" id="alumni" /> <label for="alumni">Ancien.ne stagiaire</label><br />
                                    <input type="radio" name="user_type" value="extern" id="extern" /> <label for="extern">Externe</label>
                                    </br>
                                </p>
        </fieldset></br>
                                <input type="submit" value="Envoyer"/>                        
    </form>
</body>
</html>