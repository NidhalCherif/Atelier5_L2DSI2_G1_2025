<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="accueil.php">home</a> <a href="page1.php">page1</a> <a href="page2.php">page3</a>
    <a href="deconnexion.php">Se déconnecter</a>
    <?php
    echo session_id();
    $_SESSION['nom'] = 'CHERIF';
    $_SESSION['age'] = 20; ?>

</body>

</html>