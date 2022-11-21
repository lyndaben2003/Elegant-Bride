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
    <title>moncompte</title>
</head>

<body>
   
    <h1>Bienvenu</h1> <?php echo $userrow['Email']; ?> 
    <hr />
    <h2>  Choisir une robe  </h2>
    <div class="choixdelarobe">
        <select name="name">
                <option value="Saint-Domingue">Saint-Domingue</option>
                <option value="Scarlette">Scarlette</option>
                <option value="Silen">Silen</option>
        </select>
        <select name="Couleur">
                <option value="blanc">blanc</option>
                <option value="rouge">rouge</option>
                <option value="bleu">bleu</option>
        </select>
        <select name="Taille">
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
        </select>

        <select name="nbrobe">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
        </select>
        <br></br>
        <a href="Nos-robes.php" class="btn btn-primary mt-3">
              Ajouter au panier <i class="fas fa-shopping-cart"></i>
            </a><br></br>
        <div class="deconnexion">
            <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
        </div>
<style>

h1{
    text-align:center;
    margin-top:15px;
}
h2{
    padding: 10px 15px;
    color:white;
 
}
.choixdelarobe{
    margin-top: 20px;
    padding: 10px 15px;
}
.deconnexion{
    padding: 7px 7px;
}
body{
    
    background-image: url(./robelanding.jpg);
    height: 310vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;


}



</style>



</body>
</html>

