<?php
//require_once './connectbd.php';
// On créé la requête
//$req = "INSERT INTO Utilisateur(Nom, Prenom, Adresse, Email, Mdp) VALUES ('".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['adresse']."', '".$_POST['email']."', '".$_POST['password']."')";
//$connexion->query($req);
//include 'Se connecter.html'
//
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<div class="login-form">
            
    <form action="./inscription_traitement.php" method="post"> 
        
        <h1>S'inscrire</h1>
            <h4>Informations personnelles</h4>
            <div class="inputs">
                <input type="text" name="Nom" placeholder="Nom"/>
                <input type="text" name="Prenom" placeholder="Prénom"/>
                <input type="text" name="Adresse" placeholder="Adresse"/>
                <input type="email"  name="Email"placeholder="Adresse Email"/>
                <input type="password" name="password"placeholder="Nouveau Mot de passe"/>
                <input type="password" name="password_retype" placeholder="Confirmer le mot de passe"/>
            </div>
            <div align="center">
                <button type="submit">Inscription </button>
            </div>       
     </form>
     <style>
    body{
    display:flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5;
    font-family: 'Roboto', sans-serif;
    }
    form{
    margin-top:120px;
    padding: 60px 120px;
    border-radius: 10px;
    background-color: #ffff;

    }
    form h1{
    color:#eb7371;
    text-align: center;
    }
    form .inputs{
    display:flex;
    flex-direction:column;
    }
    form .inputs input[type="text"], input[type="text"],input[type="text"],input[type="email"],input[type="password"],input[type="password"]{
    padding:15px;
    border-radius:5px;
    border:none;
    background-color: #f2f2f2;
    margin-bottom: 15px;
    outline: none;   
    }   
    form button{
    padding: 15px 25px;
    border:none;
    border-radius: 5px;
    font-size: 15px;
    color:#ffff;
    background-color: #eb7371;
    outline: none;
    cursor: pointer;

    }

</style>
    
</body>
</html>