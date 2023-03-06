<?php
    class Usuario {
        public $nombre;
        public $contrasena;
        public $email;
        public $sitioweb;

        public function __construct($nombre, $contrasena, $email, $sitioweb)
        {
            $this->nombre = $nombre;
            $this->contrasena = $contrasena;
            $this->email = $email;
            $this->sitioweb = $sitioweb;
        }
    }
?>