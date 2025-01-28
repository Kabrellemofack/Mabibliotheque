<?php
include 'connection.php';

if(isset($_POST['envoyer'])){
    $nom =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $email =$_POST['email'];
    $password =password_hash($_POST['password'],PASSWORD_BCRYPT);
   $sql="INSERT INTO utilisateur (nom,admail,mot_de_passe,prenom)VALUES(?,?,?,?)";
   $stmt=$pdo->prepare($sql);
   $stmt->execute(array($nom,$prenom,$email,$password));
   $stmt->fetch();
   echo "inscription reussie";
   header("Location:login.html");
    
}


?>