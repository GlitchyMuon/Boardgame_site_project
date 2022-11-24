<?php 
include_once 'DBConnection.php';
include_once 'Ajouts.php';

class AjoutModel {


    public DBConnection $myConnection; 
    private PDO $myPDO; 

    function __construct()
    {
        $this->myConnection = new DBConnection("");
        $this->myPDO= $this->myConnection->open();
    
    }

    function __destruct()
    {
        $this->myConnection->close();
    }

    function getSubmits() : Array {
        
        $query= "
                SELECT * FROM boardgame ;
         ";
        $request= $this->myPDO->prepare($query);
        $request->execute();
        $result = $request->fetchAll();

        $allSubmits = [];

        foreach ($result as $submit) {
            
            $aSubmit = new Ajout($submit[""],$submit[""] );

            //Autre façon de faire
            // $aFormation->id = $formation["id"]; 
            // $aFormation->nom = $formation["nom"];
            
           
            $allSubmits [] =  $aSubmit;

        }

        return $allSubmits;


    }


   



    
   
}