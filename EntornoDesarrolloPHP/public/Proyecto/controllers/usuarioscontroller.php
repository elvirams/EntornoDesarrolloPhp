<?php
    #CONTROLADOR QUE DEBE IMPLEMENTAR LOS MÉTODOS QUE AFECTAN A LOS USUARIOS  SIEMPRE UTILIZAREMOS INCLUDE_ONCE O REQUIERE_ONCE
    include_once("views/view.php");
    class UsuarioController {
        public function getAllUsuario() {
            include_once("models/usuariosDAO.php");
            $usuDAO=new UsuariosDAO();
            $usuario=$usuDAO->getAllUsuario();
            //include ("views/showproductos.php");
            View::show("showusuarios",$usuario);
        }    
    }
?>
