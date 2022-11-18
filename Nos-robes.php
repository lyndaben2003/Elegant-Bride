<?php
    require_once 'connectbd.php'; // On inclu la connexion à la bdd

    $sql = "select * from Robe";
    $result = $connexion->query($sql);
    // trouvez la fonction permettant de trouvez plusieurs résultat (potentiellement faire une boucle après !)
    $rows=mysqli_fetch_array($result);
    echo $rows["nom"];
    die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    ?>
</body>
</html>