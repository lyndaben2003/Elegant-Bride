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

/*
    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['Adresse']) && !empty($_POST['Email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        // Patch XSS
        $Nom = htmlspecialchars($_POST['Nom']);
        $Prenom = htmlspecialchars($_POST['Prenom']);
        $Adresse = htmlspecialchars($_POST['Adresse']);
        $email = htmlspecialchars($_POST['Email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        // On vérifie si l'utilisateur existe
        $check = $connexion->prepare('SELECT Nom,Prenom, Adresse, Email, password FROM Utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
    }   
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            // On insère dans la base de données
                            $insert = $connexion->prepare('INSERT INTO Utilisateur(Nom,Prenom,Adresse, Email, password) VALUES(:Nom, :Prenom, :Adresse,:Email,:password)');
                            $insert->execute(array(
                                'Nom' => $Nom,
                                'Prenom' => $Prenom,
                                'Adresse' => $Adresse,
                                'Email' => $email,
                                'password' => $password,
                                )
                            );
                            // On redirige avec le message de succès
                            header('Location:inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=password'); die();}
                    }else{ header('Location: inscription.php?reg_err=email'); die();}
                    }else{ header('Location: inscription.php?reg_err=already'); die();}
        }
*/
?>