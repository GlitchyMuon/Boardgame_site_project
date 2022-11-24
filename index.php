<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portail de jeux de société d'If3</title>
</head>
<body>
        <header>

            <div class="style-logo">
                <a href="index.php">   
                    <img src="medias/images/logo-if3.png" alt="Logo Interface3">
                </a>
            </div>

        <?php
           include("nav.php");
        ?>
        </header>
    
        
        <?php

            include("ajouts.php");
            include("AjoutModel.php");

            if(isset($_GET["page"])){
                $maPage= $_GET["page"];

                switch ($maPage) {
                    case 'ajouts':
                        $model = new AjoutModel();
                        $toutAjouts = $model->getAllSubmits(); 
                        include("ajouts.php");
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
        ?>

        
        <footer>
            <!-- <div class="style-footer"> -->
            
            <p>Made with frustration (；￣Д￣)</p>
            <p>Merci de votre visite</p>

            <!-- </div> -->
     
        </footer>
</body>
</html>