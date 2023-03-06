<?php
    session_start();
    if (isset($_POST['enviardatos'])) {
        $_SESSION['usuario'] = $_POST['nombre'];
    }
?>
<html>
<form method='POST'>
<div class="mb-3 mt-3">
            <label for="nombre" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" placeholder="Inserte un nombre" maxlength="50" >
        </div>

        <div class="mb-3 mt-3">
            <label for="password" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Inserte una contraseña" name="password">
</div>
<div class="p-3 mb-2 bg-dark text-white">
            <input type="submit"  class="form-control" name="enviardatos" value="Enviar">
</div>
</form>
<a href="sesiones2.php">Enlace a página 2</a>
</html>