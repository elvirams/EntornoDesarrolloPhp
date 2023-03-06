<?php
    require_once 'db/conexiondb.php';
    #POR CADA TABLA NECESITAMOS UN DAO  SIEMPRE UTILIZAREMOS INCLUDE_ONCE O REQUIERE_ONCE
    class UsuariosDAO {
        public $db_con;
        public function __construct(){
            $this->db_con = Database::connect();
        }
        public function getAllUsuario(){
            $stmt=$this->db_con->prepare(("select * from Usuarios"));
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
?>