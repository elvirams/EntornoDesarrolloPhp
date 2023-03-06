<?php
    class Coche {
        public $color;
        public $potencia;
        public $marca;

        public function calcvelomaxi(){
            return $this->potencia*1.5;
        }

        public function actualizarpotencia($potencia){
            return $this->potencia=$potencia;
        }
    }

    /*clases->define una estructura de los objetos (no existen en memoria)
    Atributos->privados
    Métodos->públicos
    objetos->representa instancias de una clases (si existen en memoria)
    publico->cualquiera puede acceder
    this->coje los atributos
    */
?>