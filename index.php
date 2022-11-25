<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Portail de jeux de société d'If3</title>
</head>
<body>
        <header>
            <h3>Portail de jeux de société d'IF3</h3>
        <?php
           include("nav.php");
        ?>
        </header>
    
        
        <?php

            // include("jeux.php");
            // include("JeuModel.php");

            if(isset($_GET["page"])){
                $maPage= $_GET["page"];

                switch ($maPage) {
                    case 'jeux': 
                        include("jeux.php");
                        break;
                    
                    case 'contact':
                        include("contact.php");
                        break;

                    default:
                        include("home.php");
                        break;
                }   
            
            }else {
                include("home.php");
            }

        include_once "footer.php"
        ?>

</body>
</html>