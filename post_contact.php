
<?php
include_once 'DBConnection.php';
include_once 'contact.php';

    $con = mysql_connect("localhost","root","");  
    mysql_select_db("projet_site_jeux_de_societe", $con);  
    @$u=$_POST['user'];  
    @$e=$_POST['email'];
    @$r=$_POST['reason'];
    @$m=$_POST['message'];
    @$ut=$_POST['user_type'];
    if(@$_POST['submit'])  
    {  
    echo $s="insert into employee(name,sex) values('$u','$e', '$r', '$m', '$ut')";  
    echo "Merci pour votre ajout !";  
    mysql_query($s);  
    }  
    ?>   
    