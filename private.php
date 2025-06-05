<?php
    session_name('Private');
    session_start();

    if(!isset($_SESSION['name'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Private Member</title>
</head>
<body>
    <h1>Bienvenue dans votre espace privé</h1>
    Bonjour <?php echo $_SESSION['name']; ?>
</body>
</html>