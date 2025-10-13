<?php
session_start();
if (isset($_SESSION['langue']))
    echo "Vous avez choisi la langue " . $_SESSION['langue'];
else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="radio" name="langue" value="français">Français
            <input type="radio" name="langue" value="anglais">Anglais
            <input type="submit" name="ok" value="Choisir">
        </form>
        <?php
        if (isset($_POST['ok']))
            if (!empty($_POST['langue'])) {
                $_SESSION['langue'] = $_POST['langue'];
                echo "Vous avez choisi la langue " . $_SESSION['langue'];
            }
        ?>
    </body>

    </html>
<?php
} ?>