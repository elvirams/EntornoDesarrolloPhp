<?php
function LimpiarCadena($cadena){
    $cadena = trim($cadena); // Elimina espacios antes y después de los datos
   // $datos = stripslashes($cadena); Elimina  las barras invertidas backslashes \
    $cadena = htmlspecialchars($cadena); // Traduce caracteres especiales en entidades HTML
    return $cadena;
}
