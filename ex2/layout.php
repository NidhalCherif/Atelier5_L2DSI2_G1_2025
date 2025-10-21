<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href=<link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title><?= $titre ?></title>
</head>

<body>
    <?php
    if ($_SESSION['log'] == 'Admin')
        include "navbar_admin.php";
    else
        include "navbar_user.php";
    ?>
    <div class="container mt-3">
        <H1 class="text-success"><?= $titre ?></H1>

        <?= $contenu ?> <!-- $contenu : variable tampon php-->

    </div>



</body>

</html>