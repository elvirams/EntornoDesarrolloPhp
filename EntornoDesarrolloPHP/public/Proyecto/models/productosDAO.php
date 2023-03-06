<?php
    require_once 'db/conexiondb.php';
    #POR CADA TABLA NECESITAMOS UN DAO SIEMPRE UTILIZAREMOS INCLUDE_ONCE O REQUIERE_ONCE
    class ProductosDAO {
        public $db_con;
        public function __construct(){
            $this->db_con = Database::connect();
        }
        public function getAllProducts(){
            $stmt=$this->db_con->prepare(("select * from Productos"));
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        
        public function getProductByRange($num1,$num2){
            $stmt=$this->db_con->prepare(("select * from Productos where precio between $num1 and $num2"));
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function InsertProduct($nombre,$descripcion, $precio, $procedencia){
            $stmt= $this->db_con->prepare("INSERT INTO Productos (nombre,descripcion,precio,procedencia) VALUES (:nombre, :descripcion, :precio, :procedencia)");
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':procedencia', $procedencia);

            try {
                return $stmt->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>