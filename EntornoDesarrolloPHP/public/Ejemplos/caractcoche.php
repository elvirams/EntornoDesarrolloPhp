<?php
    require('coche.php');

    $miCoche = new Coche();
    $miCoche->color = 'rojo';
    $miCoche->potencia = 120;
    echo $miCoche->potencia . "<br>";
    $miCoche->marca = 'audi';
    $miCoche->calcvelomaxi();
    echo $miCoche->calcvelomaxi() . "<br>";
    $miCoche->actualizarpotencia(200);
    echo $miCoche->potencia;

    $miCoche2 = new Coche();
    $miCoche2->color = 'rojo';
    $miCoche2->potencia = 120;
    $miCoche2->marca = 'audi';
    $miCoche2->calcvelomaxi();

?>