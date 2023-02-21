<?php
include("../../login_BD.php");
if(isset($_POST['GuardarPro'])){ 
if (empty($_POST['Producto'])||empty($_POST['Precio'])||empty($_POST['Descripcion'])||empty($_POST['Stock'])||empty($_POST['categoria'])||empty($_POST['tamaño'])){
   ?> 
   <script>alert('Por favor llenar todos los campos');</script>
   <?php
}else {
   $producto = $_POST['Producto'];
   $precio = $_POST['Precio'];
   $stock = $_POST['Stock'];
   $descripcion = $_POST['Descripcion'];
   $categoria = $_POST['categoria'];
   $tamaño = $_POST['tamaño'];
   $img = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
   $query = "INSERT INTO producto(producto, Descripcion, precio, stock, idcategoria, idporcion, imagen) VALUES ('$producto','$descripcion','$precio','$stock','$categoria','$tamaño','$img')";
   
   $resultado = $conexion->query($query);
   mysqli_close($conexion);
   if ($resultado){
       ?> 
            <script>alert('Producto insertado correctamente');</script>
            <?php
   }else {
       ?> 
       <script>alert('No se pudo insertar el producto');</script>
       <?php
   }

}
}
?>