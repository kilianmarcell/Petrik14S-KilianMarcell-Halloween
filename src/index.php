<?php

require '../vendor/autoload.php';

//Ha átírod a json nevét -> composer dumpautoload
use Petrik14S\KilianMarcell\Halloween\Models\Esemeny;
use Petrik14S\KilianMarcell\Halloween\Models\Lako;

$lako = new Lako("Brendon");
$lako2 = new Lako("Benő");
$lako3 = new Lako("János");
$lako4 = new Lako("Mari");
$lako5 = new Lako("Magdi");

$resztvevok = array ($lako, $lako2, $lako3, $lako4, $lako5);

$esemeny = new Esemeny("Kati", $lako, $resztvevok, new DateTime());

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halloween</title>
</head>
<body>
    <?php

        echo $lako -> getNev();
        echo "</br>";
        echo $lako2 -> getNev();
        echo "</br>";
        echo $lako3 -> getNev();
        echo "</br>";
        echo $lako4 -> getNev();
        echo "</br>";
        echo $lako5 -> getNev();
        echo "</br>";
        echo "</br>";

        
        //foreach( $esemeny -> getResztvevok() as $i ) {
        //    echo $i;
        //}
        echo $esemeny -> getNev();
        echo "</br>";
        echo $esemeny -> getSzerzo();
        echo "</br>";
        echo $esemeny -> getIdo();

    ?>
</body>
</html>