<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP Partie 4</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1>Exercices PHP Partie 4</h1>
    <h2>Exercice 5</h2>

    <h3>Version 1</h3>
<?php
$departements = array(
    75 => 'Paris',
    74 => 'Annecy',
    17 => 'Île d\'Oléron',
    33 => 'Bordeaux',
    64 => 'Biarritz',
);
    foreach($departements as $key  =>  $valeur){
        echo $key.' : '.$valeur.'. <br/>';
    }
?>

<h3>Version 2</h3>
<?php
$departements = [
    75 => 'Paris',
    74 => 'Annecy',
    17 => 'Île d\'Oléron',
    33 => 'Bordeaux',
    64 => 'Biarritz',
];
var_dump($departements);
    foreach($departements as $key  =>  $valeur) {
        ?>
        <p>Le départemet <?= $departements ?> a le numéro <?= $key ?></p>
        <?php
    }
?>
</body>
</html>