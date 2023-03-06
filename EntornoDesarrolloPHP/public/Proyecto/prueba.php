
<?php
   include_once ('db/conexiondb.php');
   include_once ('models/productosDAO.php');

   $pDAO=new ProductosDAO();
   $products=$pDAO->InsertProduct('Patata','Redonda',1,3);

   if ( $products==TRUE) {
      echo "se ha insertado correctamente";
   } else {
      echo "no se ha insertado correctamente";
   }
?>