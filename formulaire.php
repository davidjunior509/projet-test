<?php
    //Récupération des variables en GET
    // -------------------------------
    echo "<pre>";
    print_r($_POST);
    echo "</pre>"; 

    //Récupération des variables en POST
    // -------------------------------
    $msg = "";
    $res = "";
    if(isset($_POST['send'])) {
        if( $_POST['a'] != "" && $_POST['b'] != "") {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $send = $_POST['send'];

            echo "<span class='green'>Résultat : </span>".$a + $b;
            
        } else {
            $msg = "Vous devez remplir les champs !";
        } 
        
    }
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        .red{
            color: red;
        }
        .green{
            color: green;
        }
    </style>
    <title>Formulaire</title>
</head>
<body>
    <?php if($msg != "") {echo "<h5 class='red'>$msg</h5>";} ?>
    <form action="" method="post" accep-charse="utf-8">
        <label for="id_a">A:</label><input input id="id_a" type="text" name="a"/><br/>
        <label for="id_b">B:</label><input input id="id_b" type="text" name="b"/><br/>
        <input type="checkbox"  name="chkTest" />
        <input type="submit" name="send" value="Additionner" />
    </form>
</body>
</html>