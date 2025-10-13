<?php
session_start();
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
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        Login <input type="text" name="log" id=""><br>
        Mot de passe: <input type="text" name="pw" id=""><br>
        <input type="submit" name="ok" value="Se connecter">
    </form>
    <?php
    if (isset($_POST['ok'])) {
        $log = htmlspecialchars($_POST['log']);
        $pw = htmlspecialchars($_POST['pw']);
        if ($log == 'User' && $pw == 'User123') {
            $_SESSION['log'] = $log;
            $_SESSION['pw'] = $pw;
            header('Location: user_home.php');
            exit;
        }
        if ($log == 'Admin' && $pw == 'Admin123') {
            $_SESSION['log'] = $log;
            $_SESSION['pw'] = $pw;
            header('Location: admin_home.php');
            exit;
        }
        echo
        "<script>alert('le login et/ou le mot de passe sont incorrects')
         </script>";
    }
    ?>

</body>

</html>