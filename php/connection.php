<?php 
    $user= 'root';
    $password='';

    try {

        $pdo = new PDO ('mysql:host=localhost;dbname=bibliotheque',$user,$password);
        
        
    }catch(Exception $e){

        echo "ERREUR". $e->getMessage();
    }

?>