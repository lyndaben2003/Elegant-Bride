<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head> 
<body>
    <?php 
        if(isset($_GET['login_err']))
        {
            $err = ($_GET['login_err']);

            switch($err)
            {
                case 'password':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> mot de passe incorrect
                    </div>
                <?php
                break;
                case 'email':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> email incorrect
                    </div>
                <?php
                break;
                case 'already':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> compte non existant
                    </div>
                <?php
                break;
                     }
                }
                ?> 
    <form action="./connexion_traitement.php" method="post"> 

        <h1>Se connecter</h1>
        <div class="inputs">
            <input type="email" name="Email" placeholder="Email"/>
            <input type="password" name=" Mdp" placeholder="Mot de passe"/>
            </div>
        <p class="inscription">Je n'ai pas de compte. Je m'en <a href="S'inscrire.html"><span>crée</span></a> un</p>
        <div align="center">
            <button type="submit">Connexion </button>
            </div>
        </div>   
        </form>
        <?php
 
        if (isset($_SESSION['message'])){
            echo $_SESSION['message'];
        }
        unset($_SESSION['message']);
        ?>
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
    padding: 40px 60px;
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
    form .inputs input[type="email"], input[type="password"]{
        padding:15px;
        border-radius:5px;
        border:none;
        background-color: #f2f2f2;
        margin-bottom: 15px;
        outline: none;   
    }
    form p.inscription{
        font-size: 14px;
        margin-top: 20px;
    }
    form p.inscription span{
        color: #eb7371;
        text-decoration: none;
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
