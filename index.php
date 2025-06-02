<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>

    <?php
    /*
    *Les differents types de variables
    */
        //Ceci est mon premier fichier PHP
        $variable = "Toto";
        $entier = 12;
        $decimal = 34.25;
        $bolean = true;                                                                                                       
        $tableau = array("Lion","Banane","Voiture"); #Tableau => Array
        
    ?>

    <?php
    /*
    *Utilisation des variables et des constantes
    */
    $note = 10;
    $note = 15;

    echo $note.'<br />';

    define('CONSTANTE', "Toto");
    echo CONSTANTE
    ?>
     <hr />
    <?php
    /*
    *Les operateurs en PHP
    */

    echo "toto ". $note ." titi<br />"; #Concatenation 
    echo $note . " ".$entier."<br />";
    echo $note + $entier."<br />";
    echo $note - $entier."<br />";
    echo $note * $entier."<br />";
    echo $note / $entier."<br />";
    echo 6 % 3 . "<br />";
    echo 7 % 3 . "<br />";

    echo 10 % 5 . "<br />";
    echo 30 % 5 . "<br />";

    ?>  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
</body>
</html>
