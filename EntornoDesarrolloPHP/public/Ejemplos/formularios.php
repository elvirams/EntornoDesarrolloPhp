<?php 
    session_start();
    if (! isset($_SESSION['usuarios'])) {
        $_SESSION['usuarios'] = array(); #ES UN ARRAY ASOCIATIVO
    }

    require 'validacionform.php';
    require 'clasesform.php';
    $nombre="";
    $errornombre="";
    $password="";
    $errorpassword="";
    $erroreducacion="";
    $errornacionalidad="";
    $email="";
    $erroremail="";
    $sitioweb="";
    $errorsitio="";
    $erroridiomas="";
    $nacionalidad="";

    $bandera=0;
    if (isset($_POST['enviardatos'])) {
        $nombre = LimpiarCadena($_POST['nombre']);
        if (empty($nombre) || strlen($nombre)<6) { #FUNCIÓN QUE CUENTA LOS CARÁTERES DE UN NOMBRE
            $errornombre="El nombre debe de tener más de 6 carácteres, campo requerido";
            $bandera=1;
        }
    }

    if (isset($_POST['enviardatos'])) {
        $password = LimpiarCadena($_POST['password']);
        if (empty($password) || strlen($password)<6 || preg_match_all('$S*(?=S{8,})S*$', $password)) { #FUNCIÓN QUE CUENTA LOS CARÁTERES DE UN NOMBRE
            $errorpassword="La contraseña debe de tener más de 6 carácteres más carácteres especiales, campo requerido";
            $bandera=1;
        }
    }

    /*if (isset($_POST['enviardatos'])) {
        $eduacion=empty($_POST['password']);
        $erroreducacion="Campo requerido";
    }

    if (isset($_POST['enviardatos'])) {
        $nacionalidad=empty($_POST['nacionalidad']);
        $errornacionalidad="Campo requerido";
    }

    if (isset($_POST['enviardatos'])) {
        $idiomas=empty($_POST['idiomas']);
        $erroridiomas="Campo requerido";
    }*/

    if (isset($_POST['enviardatos'])) {
        $email = LimpiarCadena($_POST['email']);
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { #FUNCIÓN QUE CUENTA LOS CARÁTERES DE UN NOMBRE
            $erroremail="El email está mal escrito, campo requerido";
            $bandera=1;
        }
    }

    if (isset($_POST['enviardatos'])) {
        $sitioweb = LimpiarCadena($_POST['sitioweb']);
        if (empty($sitioweb) || !filter_var($sitioweb, FILTER_VALIDATE_URL)) { #FUNCIÓN QUE CUENTA LOS CARÁTERES DE UN NOMBRE
            $errorsitio="El sitio web está mal escrito, campo requerido";
            $bandera=1;
        }
    }

?>
<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>INTRODUCE TUS DATOS</title>
    </head>
<body>
   
<div class="container">
    <br>
    <div class="mb-3 mt-3">
        <center>
            <h2><u><b>FORMULARIO</b></u></h2>
        </center>
    </div>
    
    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

        <div class="mb-3 mt-3">
            <label for="nombre" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" placeholder="Inserte un nombre" maxlength="50"  value="<?php echo $nombre?>" >
            <?php echo "<p style='color: red;''>$errornombre</p>";?>
        </div>

        <div class="mb-3 mt-3">
            <label for="password" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Inserte una contraseña" name="password">
            <?php 
                echo "<p style='color: red;''>$errorpassword</p>";
            ?>
        </div>

        <div class="mb-3 mt-3">
            <label for="educacion" class="col-form-label">Educación:</label>
            <select class="form-select" name="educacion" required> <!--DE UN SELECT SOLO SE PUEDE DEVOLVER UNA OPCIÓN $_POST['EDUCACION], DEVUELVE -->
                    <option value="sin-estudios">Sin estudios</option>
                    <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
                    <option value="formacion-profesional">Formación profesional</option>
                    <option value="universidad">Universidad</option>
            </select>
            <?php echo "<p style='color: red;''>$erroreducacion</p>";?>
        </div>
        
        <div class="mb-3 mt-3">
            <label for="nacionalidad" class="col-form-label">Nacionalidad:</label> <!--ES IGUAL PORQUE TIENE EL MISMO NOMBRE-->
            <input type="radio" name="nacionalidad" value="hispana" value="<?php echo $nacionalidad?>">Hispana</input>
            <input type="radio" name="nacionalidad" value="otra" value="<?php echo $nacionalidad?>">Otra</input><br>
            <?php echo "<p style='color: red;''>$errornacionalidad</p>";?>
        </div>
        
        <div class="mb-3 mt-3">
            <label for="idiomas" class="col-form-label">Idiomas:</label>
            <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input> <!--ES UN ARRAY, CONTIENE LAS POSICIONES TANTAS HAYAN SELECCIONA EL USUARIO-->
            <input type="checkbox" name="idiomas[]" value="inglés">Inglés</input>
            <input type="checkbox" name="idiomas[]" value="francés">Francés</input>
            <input type="checkbox" name="idiomas[]" value="aleman">Alemán</input>
            <?php echo "<p style='color: red;''>$erroridiomas</p>";?>
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" placeholder="Inserte un email" name="email" value="<?php echo $email?>">
            <?php echo "<p style='color: red;''>$erroremail</p>";?>
        </div>
        
        <div class="mb-3 mt-3">
            <label for="sitioweb" class="col-form-label">Sitio Web:</label>
            <input type="text" class="form-control" placeholder="Inserte un sitio web" name="sitioweb" value="<?php echo $sitioweb?>">
            <?php echo "<p style='color: red;''>$errorsitio</p>";?>
        </div>
        
        <div class="p-3 mb-2 bg-dark text-white">
            <input type="submit"  class="form-control" name="enviardatos" value="Enviar">
        </div>
        
    </form>
        <a href="listarusuarios.php">Enlace listar usuarios</a>
    <?php
        if ($bandera == 0) {
            $usuario=new Usuario($nombre, $password, $email, $sitioweb);
            /*echo "El nombre del usuario es: " . $usuario->nombre . "<br>";
            echo "La contraseña del usuario es: " . $usuario->contrasena . "<br>";
            echo "La educación del usuario es: " . $usuario->educacion . "<br>";
            echo "La nacionalidad del usuario es: " . $usuario->nacionalidad . "<br>";
            echo "La idiomas del usuario es: " . $usuario->idiomas . "<br>";
            echo "El email del usuario es: " . $usuario->email . "<br>";
            echo "El sitioweb del usuario es: " . $usuario->sitioweb;*/
            array_push($_SESSION['usuarios'], $usuario); # array_push() Empuje uno o más elementos al final de la matriz
        }
        
    ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

