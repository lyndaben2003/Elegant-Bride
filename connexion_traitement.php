<?php 
    session_start(); // Démarrage de la session
    require_once 'connectbd.php'; // On inclut la connexion à la base de données

    if(!empty($_POST['Email']) && !empty($_POST['Mdp'])) // Si il existe les champs email, password et qu'il sont pas vides
    {
        // Patch XSS
        $email = $_POST['Email']; 
        $password = $_POST['Mdp'];

        
        // On regarde si l'utilisateur est inscrit dans la table Utilisateur
        $sql = 'SELECT * FROM Utilisateur WHERE Email = "'.$email.'" AND Mdp = "'.$password.'";';
     
        $result = $connexion->query($sql);
       
            $row=mysqli_fetch_array($result);
            if((mysqli_num_rows($result) == 1)){
                $_SESSION['Email']=$email;
                header('location:landing.php');
            }else{
            $error = "Incorrect username or password.";
            }
        
            

    }
       
        ?>



    
