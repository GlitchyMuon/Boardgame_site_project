<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Contact</h1>

    <form method="post" action="traitement.php">
        <fieldset>
            <legend>Vos coordonnées</legend>
        
                <p><label for="user">Votre pseudo</label> : <input type="text" name="user" id="user" size="30" maxlength="15" required autofocus /></p>
            
                <p><label for="email">Votre e-mail</label> : <input type="email" name="email" id="email" placeholder="Ex : username@gmail.com" size="30" maxlength="30" required /></p>
        </fieldset>

        <fieldset>
            <legend>Votre souhait</legend>
                    <p>
                        <label for="raison">Pour quelle raison nous contactez-vous ?</label><br />
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
                            <textarea name="improve" id="ameliorer" cols= 65 rows = 30>Améliorer ton site ? M'enfin il est déjà génialissime tel quel ! Quel générosité d'avoir mis en place cette plateforme ! Milles merci !!!
                            </textarea>
                                
                                <p>Cochez le type d'utilisateur IF3 :<br />
                                    <input type="radio" name="status" value="Staff" id="staff" /> <label for="staff">Staff</label><br />
                                    <input type="radio" name="status" value="intern" id="intern" /> <label for="intern">Stagiaire en cours</label><br />
                                    <input type="radio" name="status" value="alumni" id="alumni" /> <label for="alumni">Ancien.ne stagiaire</label><br />
                                    <input type="radio" name="status" value="extern" id="extern" /> <label for="extern">Externe</label>
                                </p>
        </fieldset>
                                <input type="submit" value="Envoyer"/>                        
    </form>
</body>
</html>