<?php 
    require_once 'connectbd.php'; // On inclu la connexion à la bdd

    $Nom = $_POST['Nom'];
    $Prenom =$_POST['Prenom'];
    $Adresse =$_POST['Adresse'];
    $Email =$_POST['Email'];
    $password=$_POST['password'];
    $password_retype=$_POST['password_retype'];
    if($password == $password_retype){
        $sql = "INSERT INTO Utilisateur(Nom, Prenom, Adresse, Email, Mdp, Role) VALUES ('".$Nom."', '".$Prenom."', '".$Adresse."', '".$Email."', '".$password."', 0);";
        $connexion->query($sql);
        header('Location: ./connexion.php');

    }
    else{
        header('Location: ./inscription.php');
    }

?>