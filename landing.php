<?php 
    session_start();
    require_once 'connectbd.php'; // ajout connexion bdd 
    $useremaill=$_SESSION['Email'];
    $userq=mysqli_query($connexion,"select * from `Utilisateur` where Email='$usermail'");
    $userrow=mysqli_fetch_array($userq);

    // On récupere les données de l'utilisateur
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Bonjour</title>
</head>

<body>
    <?php
        if(isset($_SESSION['Email'])){
            echo "<h1> JE SUIS CONNECTER AVEC LE COMPTE:".$_SESSION['Email']."</h1>";
        }
    ?>
    <h1>Bonjour </h1> <?php echo $userrow['Email']; ?> 
    <hr />
    <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>





</body>
</html>

