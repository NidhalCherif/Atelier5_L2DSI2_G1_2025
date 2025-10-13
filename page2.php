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
    <h1>Page2</h1>
    <a href="accueil.php">home</a> <a href="page1.php">page1</a>
    <a href="page2.php">page2</a><a href="page3.php">page3</a>
    <a href="deconnexion.php">Se déconnecter</a>
    <?php
    echo "<br>votre nom : " . $_SESSION['nom'] . "  votre age : " .
        $_SESSION['age'];
    $_SESSION['adr'] = 'Tunis';
    ?>

</body>

</html>