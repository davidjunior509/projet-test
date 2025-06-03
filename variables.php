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