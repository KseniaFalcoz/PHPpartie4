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

<?php
$départements = array(
    75=>'Paris',
    74=>'Annecy',
    17=>'Île d\'Oléron',
    33=>'Bordeaux',
    64=>'Biarritz',
);

    foreach($départements as $clefs=>$val){//cete boucle a récupéré la clé et la valeur 
        echo $clefs.' : '.$val.' . <br/>';
    }
?>

</body>
</html>