<html>
    <!--http://localhost/XDEBUG_SESSION_START=1-->
</html>

<?php
    require 'lib_func_array.php';
?>

<html>
    <h1>
        <center><b><u>EJERICIOS FUNCIONES</u></b></center>
    </h1>
    <p><b>
        3. Escribe una función llamada inicializar_array que reciba tres parémetros llamados numero_de_elementos, min y max, y que devuelva un array de números enteros comprendidos entre los valores min y max. El número de elementos que contiene el array será el especificado en el parámetro de entrada numero_de_elementos
    </b></p>
    <?php
        $mostrar=inicializar_array(5,1,5);
        print_r($mostrar);
    ?>
</html>

<html>
    <p><b>
        4. Escribe una función llamada calcular_media que reciba un array como parámetro de entrada y que devuelva la media de todos los valores que contiene.
    </b></p>
    <?php
        
        $valormedio=calcular_media($mostrar);
        echo "La media de los números del array es :" . $valormedio;
    ?>
</html>

<html>
    <p><b>
        5. Escribe una función llamada calcular_maximo que reciba un array como parámetro de entrada y que devuelva cuál es el máximo valor del array.
    </b></p>
    <?php
        
        $nummaximo=calcular_maximo($mostrar);
        echo "El numero máximo del array es: " . $nummaximo;
    ?>  
</html>

<html>
    <p><b>
        6. Escribe una función llamada calcular_minimo que reciba un array como parámetro de entrada y que devuelva cuál es el mínimo valor del array.
    </b></p>
    <?php
        
        $numminimo=calcular_minimo($mostrar);
        echo "El número mínimo del array es: " . $numminimo;
    ?>
</html>

<html>
    <p><b>
        7. Escribe una función llamada imprimir_array que reciba un array como parámetro de entrada y muestre su contenido en una tabla con dos columnas. La primera columna mostrará la posición del array y la segunda el valor que hay en esa posición.
    </b></p>
    <?php
      
      imprimir_array($mostrar);
    ?>
</html>





