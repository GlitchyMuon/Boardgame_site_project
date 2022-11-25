<?php 
include_once 'DBConnection.php';
include_once 'Jeu.php'; //la page de la classe

class JeuModel {


    public DBConnection $myConnection; 
    private PDO $myPDO; 

    function __construct()
    {
        $this->myConnection = new DBConnection("projet_site_jeux_de_societe");
        $this->myPDO= $this->myConnection->open();
    
    }

    function __destruct()
    {
        $this->myConnection->close();
    }

    function getAllGames() : Array {
        
        $query= "
                SELECT * FROM boardgame ;
         ";
        $request= $this->myPDO->prepare($query);
        $request->execute();
        $result = $request->fetchAll();

        $allGames = [];

        foreach ($result as $aLineTableGame) {
            
            $aGame = new Jeu($aLineTableGame["Name"], $aLineTableGame["Description"], $aLineTableGame["Min_players"], $aLineTableGame["Max_players"]);

            //Autre façon de faire
            // $aFormation->id = $formation["id"]; 
            // $aFormation->nom = $formation["nom"];
            
           
            $allGames [] = $aGame;

        }

        return $allGames;

    }
    
    function addGame(){
        
    }


   



    
   
}