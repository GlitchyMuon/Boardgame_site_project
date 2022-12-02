<?php 
include_once 'DBConnection.php';
include_once 'contact.php';
include_once 'Message.php';

class ContactModel {
    public DBConnection $myConnection; 
    private PDO $myPDO; 

    function __construct()
    {
        $this->myConnection = new DBConnection("if3");
        $this->myPDO= $this->myConnection->open();
    
    }

    function __destruct()
    {
        $this->myConnection->close();
    }

    function getAllMsgs() : Array {
        
        $query= "
                SELECT * from message;

         ";

        //************** Début Requête */
        //C'est vraiment ici que la communication DB commence
        $request= $this->myPDO->prepare($query);
        $request->execute();
        $result = $request->fetchAll();
        //******* FIN  */

        $allMsgs = [];

        foreach ($result as $aLineTableMsg) {
            
            $objMessage = new Message(
                $aLineTableMsg["nickname"], $aLineTableMsg["email"], $aLineTableMsg["content"]
            );
            
            $allMsgs[] =  $objMessage;
           
        }

        return $allMsgs;
    }

    function insert(Message $newMessage): void{
        $query = "
            INSERT INTO message(`nickname`, `email`, `content`) VALUES(?, ?, ?);
        ";

        try{    //SI on ne fait pas de Try, 1ère fois qu'il fait une erreur, il affiche le serveur, toute la DB, users et passwords. TJS mettre un try AND Catch, même s'il y a rien dans le catch !!!

                $request= $this->myPDO->prepare($query);
                
                $request->execute([
                    $newMessage->nickname,
                    $newMessage->email,
                    $newMessage->message
                ]);
                  
        }catch (PDOException $exception){
            die("Erreur dans l'insertion : $exception->getMessage()");
        }
        }
    
}