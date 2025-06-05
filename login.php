<?php
    session_name('Private');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php $_SESSION['name'] = "Bastien"; ?>
    <a href="private.php">Accéder à la partie privée</a>
</body>
</html>                                                                                                                                                                                                                                                                  