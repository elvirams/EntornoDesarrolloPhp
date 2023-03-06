<?php
    session_start();
    print_r($_SESSION);
    if (isset($_SESSION['usuario'])) {
        echo "Estoy en la página 2 y el usuario logueado es" . $_SESSION['usuario'] . "<br>";

    } else {
        echo "Debes registrarte en el sitio";
    }
    
    

?>