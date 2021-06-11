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
    <h2>Exercice 2</h2>

<h3>Version 1</h3>
<?php
$languages = [
    1 => 'JS',
    2 => 'Java',
    3 => 'Pyton',
    4 => 'C#',
    5 => 'C++',
];
echo 'Cinq langages de programmation : ';
    foreach($languages as $valeur){ 
    echo $valeur. ', ';
}
?>

<h3>Version 2</h3>
<?php
$languages = [
    1 => 'JS',
    2 => 'Java',
    3 => 'Pyton',
    4 => 'C#',
    5 => 'C++',
];
echo 'Cinq langages de programmation : ';
    foreach($languages as $valeur){ 
        ?>
        <p><?= $valeur ?></p>
        <?php
}
?>

</body>
</html>