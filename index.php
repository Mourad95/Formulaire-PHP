
<?php 

include_once 'includes/db_connect.inc.php';
include 'insertion.php'; 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST" >
        <p>
            Nom de l'operation: <input name ="name"type="text">
        </p>
        <p>
            Montant : <input name ="montant"type="text">
        </p>
    
            Catégories : <?php listCategory(); ?>
        </p>
        <p>
            <input type="submit" name="Category">
        </p>
        <p>
            Suppression d'une opération : <?php suppressionOperation() ?>
        </p>
        </p>
    
            Opérations: <?php ListOperations(); ?>
        </p>
        <p>
            <input type="submit" name="subCategory">
        </p>
    </form>
    <?php insertionOperation(); ?>
</body>
</html>