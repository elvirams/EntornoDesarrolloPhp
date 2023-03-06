<?php
    #CONTROLADOR QUE DEBE IMPLEMENTAR LOS MÉTODOS QUE AFECTAN A LOS PRODUCTOS SIEMPRE UTILIZAREMOS INCLUDE_ONCE O REQUIERE_ONCE
    include ("views/view.php");
    class ProductController {
        public function getAllProducts() {
            include_once ("models/productosDAO.php");
            $pDAO=new ProductosDAO();
            $products=$pDAO->getAllProducts();
            //include ("views/showproductos.php");
            View::show("showproducts",$products);
        }    

        /*METODO QUE AÑADE UN PRODUCTO A LA BBDD RECOGIENDO LOS DATOS QUE LLEGAN A TRAVÉS DE $_POST. PREVIO A LA INSERCIÓN REALIZADA A LAS VALIZACIONES DATOS
        */
        public function aniadirProducts(){
            $errores=array();
            if (isset($_POST['insertar'])){

                //SI SE HA PULSADO EL BOTÓN ISNERTAR SE VALIDAN LOS DATOS Y EN CASO DE ERROR, ESTÓS SE ALMACENAN EN EL ARRAY ($ERRORES)
                if (!isset($_POST['nombre'])|| strlen($_POST['nombre'])==0)
                    $errores['nombre']="El nombre no puede estar vacío";
                if (!isset($_POST['descripcion'])|| strlen($_POST['descripcion'])<10)
                    $errores['descripcion']="La descripcion no puede estar vacío";
                if (!isset($_POST['precio'])|| strlen($_POST['precio'])<=0)
                    $errores['precio']="El precio no puede estar vacío";

                //SI EL ARRAY ESTÁ VACIO ES QUE NO HAY ERRORES. SI INSTANCIAS UN PRODUCTODAO Y SE TRATA DE INSERTAR EL NUEVO PRODUCTO EN LA BBDD EL NUVO PRODUCTO EN LA BBDD
                //SI SE PRODUCRE LA INSERCIÓN, SE LLAMA AL MÉTODO QUE MUESTRA TODOS LOS PRODUCTOS DE LA TIENDA.
                //SI HAY ERROR, SE MUESTRA LA VISTA DE INSERCIÓN PÁNDOLE EL ARRAY DE ERRORES

                if (empty($errores)){
                    include_once('models/productosDAO.php');
                    $pDAO=new ProductosDAO();
                    if ($pDAO->InsertProduct($_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['procedencia'])){
                        $this->getAllProducts();
                    } else {
                        $errores['general']="Problemas al insertar";
                        View::show("addproduct",$errores);
                    }
                } else View::show("addproduct", $errores); 


            }
        }
    }
?>