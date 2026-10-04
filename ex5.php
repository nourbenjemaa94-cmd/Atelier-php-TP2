<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Exercice 5</title>
</head>
<body>
    
    <?php

        include "navbar.php";


    $chaine = "hello world"; 

    $mots = explode(' ', $chaine);

    $resultat = "";
    
    foreach ($mots as $mot) {
        if ($mot != "") {
            
            $premiereLettre = $mot[0];
            
            
            $resultat .= strtoupper($premiereLettre);
        }
    }

    echo "En entrée : " . $chaine . "\n"; 
    echo "Affichage : " . $resultat;     


    ?>
    
</body>
</html>