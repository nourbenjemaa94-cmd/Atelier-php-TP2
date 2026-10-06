<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Exercice 4</title>
</head>
<body>
    <?php

        include "navbar.php";

            $chaine="chaine";
            echo $chaine ;

            ?> <br>
            <?php
        
        
            echo "Longueur : " . strlen($chaine) . "<br>";
            echo "Sous-chaîne ";
        
            $inverse = "";
            for ($i = strlen($chaine) - 1; $i >= 0; $i--) {
                $inverse = $inverse . $chaine[$i];
            }
            echo "Chaîne inversée : $inverse";
        


    ?>
    
</body>
</html>