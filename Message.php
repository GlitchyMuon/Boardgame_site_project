<?php

class Message {
    public string $nickname;
    public string $email;
    public string $message;



    function __construct(string $pseudo, string $email, string $message )     //peut être un autre nom mais doit reférer à ce que c'est
    {
        $this->nickname=$pseudo;
        $this->email=$email;
        $this->message=$message;
    }

    

}

?>