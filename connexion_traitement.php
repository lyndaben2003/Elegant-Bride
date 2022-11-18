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

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo " Name: " . $row["Nom"]. " " . $row["Prenom"]. "<br>";
          }
        } else {
          echo "0 results";
        }
   

      
        $data = $check->fetch();
             // Si le mail est bon niveau format
             if(filter_var($email, FILTER_VALIDATE_EMAIL))
             {
                 // Si le mot de passe est le bon
                 if(password_verify($password, $data['Mdp']))
                 {
                     // On créer la session et on redirige sur landing.php
                     $_SESSION['Utilisateur'] = $data[$email];
                     $_SESSION['Utilisateur'] = $data[$password ];
                     else{
                        $row=mysqli_fetch_array($query);
                        $_SESSION['id']=$row['userid'];
                        header('location:success.php');
                    }
                     header('Location: landing.php');
                     die();
                 }else{ header('Location: connexion.php?login_err=password'); die(); }
             }else{ header('Location: connexion.php?login_err=email'); die(); }
         }else{ header('Location: connexion.php?login_err=already'); die(); }
    
?>

$sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

if(mysqli_num_rows($result) == 1)
{
$_SESSION['username'] = $login_user; // Initializing Session
header("location: home.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect username or password.";
}

    
