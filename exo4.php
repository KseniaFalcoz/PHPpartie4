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
    <h2>Exercice 4</h2>

<?php
$languages = [
    1=>'JS',
    2=>'Java',
    3=>'Pyton',
    4=>'C#',
    5=>'C++',
];
$languages += [6 => 'PHP'];

echo 'jaffiche la valeur de la clé ajouté qui est 6 : '.$languages[6];
?>

</body>
</html>