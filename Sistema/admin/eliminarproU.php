<?php
session_start();
if($_SESSION['idrol'] != 2){
    header("location:UsuarioU.php");    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Usuario.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f368768ce7.js" crossorigin="anonymous"></script>
    
    <link rel="icon" href="img/Logo.jpeg">
    <title>Document</title>
</head>
<body>
 <div class="body">
 <?php include("headerUsuario.php")?>
     <div class="Mostrar_contenido">
     <div class="cont_titulo">
            <div class="dis_l">Productos</div> 
           <div class="dis_x"> <button class="btn-cerrar buttonDelete" type="button"><a href="../indexU.php" class="btn_cerrar_a">X</a></button></div>
        </div>
        <div class="contenidoUsuario">
            <ul class="columnasEditar">
                <li class="filaseditar filachild"><a href="NuevoproU.php" class="link_perfil">Nuevo Producto</a></li>
                <li class="filaseditar filachild"><a href="ListaProU.php" class="link_perfil">Lista Producto</a></li>
                <li class="filaseditar filafirst"><p class="firstEditar">Eliminar Producto</p></li>
            </ul>
            <div class="contenidoUsuario_all">
                   <!-- carrito -->
           <!-- START SECTION SHOPPING CART -->
            <section class="ccn">
                <div class="container">
                    <h1 class="text-center">Eliminar Producto</h1>
                    <hr>
                    <div class="row row1 ">
                        <div class="col6">
                            <div class="shopping-cart-header">
                                <h6>IdPro</h6>
                            </div>
                        </div>
                        <div class="col1 col-6">
                            <div class="shopping-cart-header">
                                <h6>Nombre Producto</h6>
                            </div>
                        </div>
                        <div class="col2 col-2">
                            <div class="shopping-cart-header">
                                <h6 class="text-truncate">Precio</h6>
                            </div>
                        </div>
                        <div class="col3 col-4">
                            <div class="shopping-cart-header">
                                <h6>Stock</h6>
                            </div>
                            
                        </div>
                        <div class="col4 col-3">
                            <div class="shopping-cart-header">
                                <h6>Categoria</h6>
                            </div>
                        </div>
                        <div class="col5 col-5">
                            <div class="shopping-cart-header">
                                <h6>Tamaño</h6>
                            </div>
                        </div>
                    </div>
                    <form action="" method="POST" class="formActualizar formInsertar ">
                        <div class="DatosActualizar Insertarpro ">
                            <div class="fila_1">
                                <div class="etiquetaUsuario"><p>Id producto</p></div>  
                                <input class="form-actualizar" type="text" name="Idpro" id="Idpro" placeholder="Ingrese el ID">
                                <br>
                                <div class="etiquetaUsuario"><p>Nombre Producto</p></div>  
                                <input class="form-actualizar" type="text" name="Nombre_Producto" id="Nombre_Producto" placeholder="Nombre Producto">
                                <br>
                                <div class="etiquetaUsuario"><p>Stock</p></div>  
                                <input class="form-actualizar" type="text" name="Stock" id="Stock" placeholder="Ingrese el Stock"> 
                            </div>
                         <div class="fila_2">
                            <div class="etiquetaUsuario"><p>Categoria</p></div>  
                            <input class="form-actualizar" type="text" name="Categoria" id="Categoria" placeholder="Ingrese la Categoria">  
                            <div class="etiquetaUsuario"><p>Tamaño</p></div>  
                            <input class="form-actualizar" type="text" name="Tamaño" id="Tamaño" placeholder="Ingrese el Tamaño">  
                            <br>            
                            <button class="btn_actualizar" name="actualizar">Eliminar Producto</button>
                         </div>
                    
                      </div>
                       </form>
            </div>
        </section>
 
            </div>
        </div>
     </div>
</div>
    <script src="usuario.js"></script>
</body>
</html>