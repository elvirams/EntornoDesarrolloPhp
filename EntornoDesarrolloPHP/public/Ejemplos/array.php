<html>
    <!--http://localhost/XDEBUG_SESSION_START=1-->
</html>


<html>
    <h1>
        <center><b><u>EJERICIOS ARRAYS</u></b></center>
    </h1>
    <p><b>
    1. Escribe un script PHP que realice las siguientes acciones: Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprimir todos los valores que almacena.
    </b></p>
    <?php
        $valeatorios=array();
        for ($i=0; $i<10; $i++){ #EN VEZ DE PONER 10 PODEMOS PONER EL NÚMERO DE ELEMENTOS $NUMELEMENTOS=0;
            $valeatorios[$i]=rand(1,30);
            echo $valeatorios[$i];
            echo "<br>";
        }

    ?>
</html>

<html>
    <p><b>
    2. Escribe un script PHP que realice las siguientes acciones:Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprima todos los valores que almacena. Calcular el valor medio de los valores del array.
    Mostrar el valor medio que ha calculado.
    </b></p>
    <?php
        $aux=0;
        $valeatorios=array();
        for ($i=0; $i<10; $i++){
            $valeatorios[$i]=rand(1,30);
            echo $valeatorios[$i];
            echo "<br>";
            $aux=$aux+$valeatorios[$i];
        }
        $NumeroElementos=count($valeatorios);
        $vmedia=$aux/$NumeroElementos;
        echo "La media de los números del array es:" . $vmedia;
    ?>
</html>

<html>
    <p><b>
    3. Escribe un script PHP que realice las siguientes acciones: Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprima todos los valores que almacena. Buscar el valor máximo de los valores del array.
    Muestre el valor máximo que ha encontrado.
    </b></p>
    <?php
        $max=$valeatorios[0];
        $valeatorios=array();
        for ($i=0; $i<10; $i++){
            $valeatorios[$i]=rand(1,30);
            echo $valeatorios[$i];
            echo "<br>";
            if ($valeatorios[$i] > $max) {
                $max=$valeatorios[$i];
            }
        }
        echo "El número máximo del array es:" . $max;
    ?>
</html>

<html>
    <p><b>
    4. Escribe un script PHP que realice las siguientes acciones: Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprima todos los valores que almacena. Buscar el valor mínimo de los valores del array.
    Muestre el valor mínimo que ha encontrado.
    </b></p>
    <?php
        $min=$valeatorios[0]; #DAMOS POR SUPUESTO QUE EL MÍNIMO ES EL NÚMERO QUE ESTÁ DENTRO DEL ARRAY EN LA POSICIÓN 0
        $valeatorios=array();
        for ($i=0; $i<10; $i++){
            $valeatorios[$i]=rand(1,30);
            echo $valeatorios[$i];
            echo "<br>";
            if ($valeatorios[$i] < $min) {
                $min=$valeatorios[$i];
            }
        }
        echo "El número máximo del array es:" . $min;
    ?>
</html>

<html>
    <p><b>
    5. Buscar en una array si un número se encuentra o no además de mostrar su posición.
    </b></p>
    <?php
        $valeatorios=array();
        $NumBuscar=9;
        $env="false";
        
        for ($i=0; $i<10; $i++){
            $valeatorios[$i]=rand(1,30);
            
            echo $valeatorios[$i];
            echo "<br>";
           
        }
        $NumeroElementos=count($valeatorios);
        $i=0;
        while ($i < $NumeroElementos && $env=="false") {
            if ($valeatorios[$i] == $NumBuscar) {
                $env="true"; 
            }
            $i++;
        }
        if ($env=="false") {
            echo "El número" .  $NumBuscar .  "no se encuentra en ninguna posición";
        }else {
            echo "El número: " .  $NumBuscar . "se enceuntra en la posición" .  $i;
        }

       
    ?>
</html>

<html>
    <p><b>
    6.Ordena un array desordenado
    </b></p>
    <?php
        $valeatorios=array();
        for ($i=0; $i<10; $i++){
            $valeatorios[$i]=rand(1,30);
            $NumeroElementos=count($valeatorios);
            echo $valeatorios[$i];
            echo "<br>";
            for ($j=0; $j<$NumeroElementos; $j++){
                if ($valeatorios[$i] < $valeatorios[$j]) {
                    $aux=$valeatorios[$j];
                    $valeatorios[$j]=$valeatorios[$i];
                    $valeatorios[$i]=$aux;
                }
            }
        }
        print_r($valeatorios);
    ?>
</html>


