<?php
session_start();
if (isset($_GET['etat'])) {
    $etat = $_GET['etat'];
    switch ($etat) {
        case '1':
            echo  "<p class='alert alert-success'>Merci pour votre visite :) </p>";

            break;
        case '2':
            echo "<p class='alert alert-warning'>Login et/ou mot de passe sont incorrects </p>";

            break;
        case '3':
            echo "<p class='alert alert-danger'>Vous n'êtes pas autorisés!!! </p>";

            break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container-mt-4">
        <form class="border rounded p-2 w-25" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <H4 class="text-info">Please Sign in!</H4>
            Login <input class="form-control" type="text" name="log" id=""><br>
            Mot de passe: <input class="form-control" type="text" name="pw" id=""><br>
            <input class="btn btn-success" type="submit" name="ok" value="Se connecter">
        </form>
    </div>
    <?php
    if (isset($_POST['ok'])) {
        $log = htmlspecialchars($_POST['log']);
        $pw = md5(htmlspecialchars($_POST['pw']));
        if ($log == 'User' && $pw == '5a30c9609b52fe348fb6925896e061de') {
            $_SESSION['log'] = $log;
            $_SESSION['pw'] = $pw;
            header('Location: user_home.php');
            exit;
        }
        if ($log == 'Admin' && $pw == 'e64b78fc3bc91bcbc7dc232ba8ec59e0') {
            $_SESSION['log'] = $log;
            $_SESSION['pw'] = $pw;
            header('Location: admin_home.php');
            exit;
        }
        header('Location: login.php?etat=2');
    }
    ?>

</body>

</html>