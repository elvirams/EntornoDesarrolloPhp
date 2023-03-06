<?php
    #LO PRIMERO QUE VEMOS Y NOSOTROS REDICIONAREMOS A OTRAS PÁGINAS
    
/*  #CREAMOS UNA CONEXIÓN CON LA BASE DE DATOS
    require 'db/conexiondb.php';
    $con=Database::connect();
    #print_r($con);
/*

    #EJEMPLO 1: $row es un arraylanzar la consulta y visualizar los datos
    $stmt = $con->prepare("SELECT * FROM Productos");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    while ($row = $stmt->fetch()){
        echo "Nombre: {$row["nombre"]} <br>"; #EL $row["nombre"], son las columnas de la tabla 
        echo "Descripcion: {$row["descripcion"]} <br>";
        echo "Precio: {$row["precio"]} <br>";
        echo "Procedencia: {$row["procedencia"]} <br>";
        echo "<br>";
    }
    #EJEMPLO 2: $row es un objeto, lanzar la consulta y visualizar los datos
    $stmt = $con->prepare("SELECT * FROM Productos");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_OBJ)){
        echo "Nombre:". $row->nombre . "<br>"; #EL $row["nombre"], son las columnas de la tabla 
        echo "Descripcion:". $row->descripcion . "<br>";
        echo "Precio:". $row->precio . "<br>";
        echo "Procedencia:". $row->procedencia . "<br>";
        echo "<br>";
    #EJEMPLO 3: 
    $stmt = $con->query("SELECT * FROM Productos");
    $productos = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($productos as $productos){
        echo "Nombre: ". $productos->nombre . "<br>";
        echo "Descripcion: ". $productos->descripcion . "<br>";
        echo "Precio: ". $productos->precio . "<br>";
        echo "Procedencia: ". $productos->procedencia . "<br>";
        echo "<br>";
    }
    }
    require 'models/productosDAO.php';
    $p=new ProductosDAO();
    $producto= $p->getAllProducts();
    print_r($producto);
    #print_r($p->getAllProducts());
    echo "<br>";
    print_r($p->getProductByRange(0,15));*/

    #include 'views/header.php';

    include ("controllers/productoscontroller.php");
    $cont=new ProductController();
    print_r($cont->getAllProducts());

    include ("controllers/usuarioscontroller.php");
    $cont=new UsuarioController();
    print_r($cont->getAllUsuario());
    #include 'views/footer.php';*/

?>