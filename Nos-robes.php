
<?php 
    require_once 'connectbd.php'; // On inclu la connexion à la bdd

    $Nom = $_POST['Nom'];
    $Idrobe =$_POST['id_robe'];
    $Idutilisateur =$_POST['id_utilisateur'];

        if(isset($_POST["id_robe"])){
        
        $sql = "INSERT INTO panier(id_robe, id_utilisateur) VALUES ('".$Idrobe."', '".$Idutilisateur."');";
        $connexion->query($sql);
        header('Location: ./Nosrobes.html');

    }
    else{
        header('Location: ./connexion.php');
    }

?>



        