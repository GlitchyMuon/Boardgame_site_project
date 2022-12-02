<?php
include_once "footer.php";
include_once "contact.php";
include_once "ContactModel.php";

$envoiFormulaire = isset($_POST["user"], $_POST["email"], $_POST["message"]);

if($envoiFormulaire){
    //cela veut dire qu'on nous a envoyé un message

    $nomRecu = $_POST["user"];
    $emailRecu = $_POST["email"];
    $messageRecu = $_POST["message"];
    

    echo "<h2>Cette page a reçu comme information</h2>"; 
    echo strip_tags("<p>Nom: $nomRecu</p>");
    echo strip_tags("<p>Email: $emailRecu</p>"); 
    echo strip_tags("<p> Message: $messageRecu</p>");
}
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
    <h5>Votre message a été enregistré ! Merci de votre feedback ٩(｡•́‿•̀｡)۶</h5>
</body>
</html>
