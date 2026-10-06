<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Exercice 2</title>
</head>
<body>


    <?php
    include "navbar.php";

    $tabpays1 = ["Tunisie", "France", "Japon", "Brésil", "Canada", "Allemagne"];
    $tabpays2 = ["Tunis" => "Tunisie", "Paris" => "France", "Tokyo" => "Japon", "Brasilia" => "Brésil", "Ottawa" => "Canada", "Berlin" => "Allemagne"];
    ?>

    <h3>1. Contenu de tabpays1</h3>
    <?php
    foreach ($tabpays1 as $pays) {
        echo "$pays <br>";
    }
    ?>

    <h3>2. tabpays1 trié par ordre croissant</h3>
    <?php
    sort($tabpays1);
    foreach ($tabpays1 as $pays) {
        echo "$pays <br>";
    }
    ?>

    <h3>2. tabpays1 trié par ordre décroissant</h3>
    <?php
    rsort($tabpays1);
    foreach ($tabpays1 as $pays) {
        echo "$pays <br>";
    }
    ?>

    <h3>4. Contenu de tabpays2</h3>
    <?php
    foreach ($tabpays2 as $capitale => $pays) {
        echo "$capitale : $pays <br>";
    }
    ?>

    <h3>4. tabpays2 trié par ordre croissant des valeurs</h3>
    <?php
    asort($tabpays2);
    foreach ($tabpays2 as $capitale => $pays) {
        echo "$capitale : $pays <br>";
    }
    ?>

    <h3>4. tabpays2 trié par ordre décroissant des valeurs</h3>
    <?php
    arsort($tabpays2);
    foreach ($tabpays2 as $capitale => $pays) {
        echo "$capitale : $pays <br>";
    }
    ?>

    <h3>5. tabpays2 trié par ordre croissant des indices</h3>
    <?php
    ksort($tabpays2);
    foreach ($tabpays2 as $capitale => $pays) {
        echo "$capitale : $pays <br>";
    }
    ?>

    <h3>5. tabpays2 trié par ordre décroissant des indices</h3>
    <?php
    krsort($tabpays2);
    foreach ($tabpays2 as $capitale => $pays) {
        echo "$capitale : $pays <br>";
    }
    ?>

    <h3>6. tabpays1 en tableau HTML</h3>
    <table border="1">
        <tr>
            <th>Indice</th>
            <th>Pays</th>
        </tr>
        <?php foreach ($tabpays1 as $indice => $pays) { ?>
        <tr>
            <td><?php echo $indice; ?></td>
            <td><?php echo $pays; ?></td>
        </tr>
        <?php } ?>
    </table>

    <h3>6. tabpays2 en tableau HTML</h3>
    <table border="1">
        <tr>
            <th>Capitale</th>
            <th>Pays</th>
        </tr>
        <?php foreach ($tabpays2 as $capitale => $pays) { ?>
        <tr>
            <td><?php echo $capitale; ?></td>
            <td><?php echo $pays; ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>


</body>
</html>