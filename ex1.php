<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Exercice 1</title>
</head>
<body>
    <?php

        include "navbar.php";

        $Notes=["Rami"=>7.50,"Mohamed"=>19.00,"Amira"=>15.50,"Asma"=>10.00,"Ahmed"=>09.5,"Yassine"=>15.50,"Islem"=>12.00];
        $NbEtidiant=0;
        $Nb_bonne_etudiant=0;

        echo "La liste des étudiants qui ont une note supérieur ou égale à 10 est: ";

    ?>

    <ul>
        <?php
        foreach($Notes as $b => $a){
            $NbEtidiant++;
            if($a>=10){
                $Nb_bonne_etudiant++;
                ?>
                <li><?= $b ?> : <?= $a ?></li>
                <?php
            }
        }
        ?>
    </ul>
    <?php
        echo "Nombre d'étudiants est égale à: " . $NbEtidiant . " étudiants";

    ?>
    <br>
    <?php
        echo "Nombre des bonne étudiants est égale à " . $Nb_bonne_etudiant . " étudiants";
    ?>




<hr>


    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Note en PHP</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($Notes as $b => $a){
                    
                    ?>
                        <tr>
                            <td><?= $b ?></td>
                            <td><?= $a ?></td>
                        </tr>
                    <?php
                }
        
                ?>
            </tbody>
    </table>
    <br>
    <?php

    asort($Notes);
?>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Note en PHP</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($Notes as $b => $a){
                    
                    ?>
                        <tr>
                            <td><?= $b ?></td>
                            <td><?= $a ?></td>
                        </tr>
                    <?php
                }
        
                ?>
            </tbody>
    </table>
    <br>



    <?php

    krsort($Notes);
?>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Note en PHP</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($Notes as $b => $a){
                    
                    ?>
                        <tr>
                            <td><?= $b ?></td>
                            <td><?= $a ?></td>
                        </tr>
                    <?php
                }
        
                ?>
            </tbody>
    </table>
    <br>

    <?php

    // $p=0;
    // $i=0;

    // while ($i < count($Notes)) {
    //     if ($Notes[$i]<= $Notes[$i+1]) {
    //         $p=$Notes[$i];
    //         $Notes[$i]=$Notes[$i+1];
    //         $Notes[$i+1]=$p;
    //         //permuter
    //     }
    //     $i++;
    // }
    // $max=$Notes[0];
    // foreach($Notes as $b => $a){
    //         if ($max< $a) {
    //         $p=$Notes[$i];
    //         $Notes[$i]=$Notes[$i+1];
    //         $Notes[$i+1]=$p;
    //         //permuter
    //     }
    //     $i++;
    //     }

    $moy=0;
    foreach($Notes as $b => $a){
            $moy= $moy + $a;
        }
    $moy= $moy / count($Notes);

    echo "la moyenne des notes en PHP est egal a " . $moy;

    ?> 
    
    
</body>
</html>
