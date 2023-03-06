<?php
    /*
    Función inicializar_array recibe tres parémetros, 
        -$numero_de_elementos=Número total de posiciones del array.
        -$max=Valor máximo al puede llegar el array.
        -$min=Valor mínimo al que puede llegar el array.
    Devuelva un array de números enteros comprendidos entre los valores min y max.
    */
    function inicializar_array($numero_de_elementos,$min,$max) {
        $numentero=array();
        for ($i=0; $i<$numero_de_elementos; $i++) {
            $numentero[$i]=rand($min,$max);
        }
        return $numentero;
    }

    /*
    Función calcular_media recibe un array como parámetro de entrada.
    Devuelve la media de todos los valores que contiene el array.
    */
    function calcular_media($arrayparam) {
        $suma=0;
        $valormedio=0;
        $totalelementos=count($arrayparam);
        for ($i=0; $i<$totalelementos; $i++) {
            $suma=$arrayparam[$i]+$suma;
        }
        $media=$suma/$totalelementos;
        return $media;
        
    }

    /*
    Función calcular_maximo recibe un array como parámetro de entrada.
    Devuelve el valor máximo del array.
    */
    function calcular_maximo ($arrayparam) {
        $totalelementos=count($arrayparam);
        $max=$arrayparam[0];
        for ($i=0; $i<$totalelementos; $i++) {
            if ($arrayparam[$i] > $max) {
                $max=$arrayparam[$i];
            }
        }
        return $max;
    }

    /*
    Función calcular_minimo recibe un array como parámetro de entrada.
    Devuelve el valor mínimo del array.
    */

    function calcular_minimo ($arrayparam) {
        $totalelementos=count($arrayparam);
        $min=$arrayparam[0];
        for ($i=0; $i<$totalelementos; $i++) {
            if ($arrayparam[$i] < $min) {
                $min=$arrayparam[$i];
            }
        }
        return $min;
    }

    /*
    Función imprimir_array recibe un array como parámetro de entrada.
    Muestra su contenido en una tabla con dos columnas. 
        -La primera columna muestra la posición del array.
        -La segunda el valor que hay en esa posición.
    */
    function imprimir_array ($arrayparam) {
        echo "<table border=2px>";
        foreach ($arrayparam as $clave => $valor) {
            echo "<tr>";
            echo "<td>$clave</td>"; #POSICIÓN EN LA TABLA
            echo "<td>$valor</td>"; #VALOR DE LA TABLA EN ESA POSICION
            echo "</tr>";
        }
        echo "</table>";
      }
?>