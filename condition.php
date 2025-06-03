<?php

$a = 20;

if($a <= 20) {
    echo '$a < 20';
}else {
    echo '$a > 20';
}

echo '<br />';
echo '<hr />';

$b = 15;

if($a == $b){
    echo '$a est egale a $b';
}else {
    echo '$a est differente a $b';
}

echo '<br />';
echo '<hr />';

# operateur ternaire
echo ($a == $b) ? '$a est égale à $b' : '$a n\'est pas égale à $b';

echo '<br />';
echo '<hr />';

$note = 14;

if ($note < 10){
    echo 'Non obtenu';
}elseif($note >= 10 && $note < 12){
    echo 'Sans distinction';
}elseif($note >= 12 && $note < 14) {
    echo 'Encouragement';
}elseif ($note >= 14){
    echo 'Félicitation';
}

echo '<hr />';

$type = "chat";

if($type == "chien" || $type == "chat"){
    echo "C'est un animal domestique";
}

echo "<hr />";

$test = "value";
switch($test){
    case 'value':
        echo "Ici c'est value";
        break;

    default:
        echo "Ici c'est le cas par défaut";
        break;
}