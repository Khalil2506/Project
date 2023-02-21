<?php
session_start();
 include("confi.php");
 include("../conexionbd.php");
 include ("../carritoC.php");

?>
<?php
if($_POST){
    $total=0;
    $SID = $_SESSION['Usuario'];
    $correo = $_POST['email']; 
    foreach($_SESSION['carrito'] as $indice =>$producto){
        $total = $total+ ($producto['precio']*$producto['cantidad']);
    }
        $query = $conexion->prepare("INSERT INTO `factura`(`cliente`, `n_cuentabancaria`, `fecha`, `Total`, `correo`, `estatus`) 
        VALUES (:cliente,'',NOW(),:total,:correo,'pendiente')");
        $query->bindParam(":cliente",$SID);
        $query->bindParam(":total",$total);  
        $query->bindParam(":correo",$correo);
        $query -> execute();
       $idventa = $conexion->lastInsertId();
     
       foreach($_SESSION['carrito'] as $indice =>$producto){
           $total1=number_format($producto['precio']*$producto['cantidad']);
           $query = $conexion->prepare("INSERT INTO `detallefactura`(`cod_pro`, `descripcion`, `cantidad`, `precio`, `Total`, `cod_factura`) 
           VALUES (:codpro,:descripcion,:cantidad,:precio,:total,:idventa)");
           $query->bindParam(":codpro",$producto['cod']);
           $query->bindParam(":descripcion",$producto['nombre']);  
           $query->bindParam(":cantidad",$producto['cantidad']);
           $query->bindParam(":precio",$producto['precio']);
           $query->bindParam(":total",$total1);
           $query->bindParam(":idventa",$idventa);
           $query -> execute();
          
          
           unset($_SESSION['carrito']);
       }
       echo "<script> alert('Compra Realizada');</script>";
      
    
}
?>