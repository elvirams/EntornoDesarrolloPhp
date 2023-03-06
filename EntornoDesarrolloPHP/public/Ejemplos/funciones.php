<html>
    <!--http://localhost/XDEBUG_SESSION_START=1-->
</html>

<html>
    <h1>
        <center><b><u>EJERICIOS FUNCIONES</u></b></center>
    </h1>
    <p><b>
        1.Escribe una función que reciba un número como parámetro de entrada y que imprima su tabla de multiplicar.
    </b></p>
    <?php
        
        $num=rand(1,10);
        echo "La tabla de multiplicar de $num es: <br>";
        function tablas($num) {
        for ($i=0; $i<=10; $i++) {
            echo "$num x $i = ". $num*$i . "<br>";
        }
        }
        tablas($num);
    ?>
</html>

<html>
    <p><b>
        2. Escribe una función que reciba dos parámetros de entrada (inicio y fin) y que imprima las tablas de multiplicar entre esos dos números. Utilice la función del ejercicio anterior.
    </b></p>
    <?php
        $num1=4;
        $num2=7;
        echo "La tabla de multiplicar entre $num1 y $num2 es: <br>";
        function tablasentre($num1,$num2){
            for ($i=$num1; $i<=$num2; $i++){
                tablas($i);
                echo "<br>";
            }
        }

        tablasentre($num1,$num2);
      
    ?>
</html>

<html>
    <p><b>
        3. Escribe una función llamada inicializar_array que reciba tres parémetros llamados numero_de_elementos, min y max, y que devuelva un array de números enteros comprendidos entre los valores min y max. El número de elementos que contiene el array será el especificado en el parámetro de entrada numero_de_elementos
    </b></p>
    <?php
        function inicializar_array($numero_de_elementos,$min,$max) {
            $numentero=array();
            for ($i=0; $i<$numero_de_elementos; $i++) {
                $numentero[$i]=rand($min,$max);
            }
            return $numentero;
        }

        $mostrar=inicializar_array(5,1,5);
        print_r($mostrar);
    ?>
</html>

<html>
    <p><b>
        4. Escribe una función llamada calcular_media que reciba un array como parámetro de entrada y que devuelva la media de todos los valores que contiene.
    </b></p>
    <?php
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
        $valormedio=calcular_media($mostrar);
        echo "La media de los números del array es :" . $valormedio;
    ?>
</html>

<html>
    <p><b>
        5. Escribe una función llamada calcular_maximo que reciba un array como parámetro de entrada y que devuelva cuál es el máximo valor del array.
    </b></p>
    <?php
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
        $nummaximo=calcular_maximo($mostrar);
        echo "El numero máximo del array es: " . $nummaximo;
    ?>  
</html>

<html>
    <p><b>
        6. Escribe una función llamada calcular_minimo que reciba un array como parámetro de entrada y que devuelva cuál es el mínimo valor del array.
    </b></p>
    <?php
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
        $numminimo=calcular_minimo($mostrar);
        echo "El número mínimo del array es: " . $numminimo;
    ?>
</html>

<html>
    <p><b>
        7. Escribe una función llamada imprimir_array que reciba un array como parámetro de entrada y muestre su contenido en una tabla con dos columnas. La primera columna mostrará la posición del array y la segunda el valor que hay en esa posición.
    </b></p>
    <?php
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
      imprimir_array($mostrar);
    ?>
</html>





