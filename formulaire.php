<?php

/*
function convertCountryValureToFrenchLabel($value){
    if($value === "canada"){//=== verifie aussi que c'est le même typage ici string 
        return "Canada";
    }  
    
    elseif ($value === "russia"){
        return "Russie";
    }
    elseif ($value === "guam"){
        return "Pays Guam!";
    }
    else {
        return "Pays inconnu!";
    }
    
}
*/   

$subCatname = $_POST["name"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    
   <h1>Ce que vous faites</h1>
   
       <p>
           Voici votre action
       </p>

        <p>
            Type d'achat : <span name ="typeAchat"type="text"><?php echo $name ?></span>
            
    
    
</body>
</html>