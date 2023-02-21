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
    <title>Insertar Factura</title>
</head>
<body>
 <div class="body">
 <?php include("headerUsuario.php")?>
     <div class="Mostrar_contenido">
     <div class="cont_titulo">
            <div class="dis_l">Facturas</div> 
           <div class="dis_x"> <button class="btn-cerrar buttonDelete" type="button"><a href="../indexU.php" class="btn_cerrar_a">X</a></button></div>
        </div>
        <div class="contenidoUsuario">
            <ul class="columnasEditar">
                <li class="filaseditar filachild"><a href="Consultarfac.php" class="link_perfil">Consultar Factura</a> </li>
                <li class="filaseditar filafirst"><p class="firstEditar">Insertar Factura</p></li>
            </ul>
            <div class="contenidoUsuario_all">
                   <!-- carrito -->
           <!-- START SECTION SHOPPING CART -->
           <section class="ccn">
            <div class="container">
                <h1 class="text-center">Insertar Factura</h1>
                <hr>
                <div class="row row1 ">
                    <div class="col6">
                        <div class="shopping-cart-header">
                            <h6>IdFact</h6>
                        </div>
                    </div>
                    <div class="col12 col-6">
                        <div class="shopping-cart-header">
                            <h6>Usuario</h6>
                        </div>
                    </div>
                    <div class="col23 col-2">
                        <div class="shopping-cart-header">
                            <h6 class="text-truncate">Descripcion</h6>
                        </div>
                    </div>
                    <div class="col3 col-4">
                        <div class="shopping-cart-header">
                            <h6>Fecha</h6>
                        </div>
                        
                    </div>
                    <div class="col4 col-3">
                        <div class="shopping-cart-header">
                            <h6>Total</h6>
                        </div>
                    </div>
                </div>
                <form action="" method="POST" class="formActualizar formInsertar">
                    <div class="DatosActualizar Insertarpro">
                        <div class="fila_1">
                            <div class="etiquetaUsuario"><p>Usuario</p></div>  
                            <input class="form-actualizar" type="text" name="Usuario1" id="Usuario1" placeholder="Ingrese nombre Usuario">
                            <br>
                            <div class="etiquetaUsuario"><p>Descripcion</p></div>  
                            <input class="form-actualizar" type="text" name="Descripcion" id="Descripcion" placeholder="Ingrese la Descripcion">
                            <br>
                            <div class="etiquetaUsuario"><p>Fecha</p></div>  
                            <input class="form-actualizar" type="text" name="Fecha" id="Fecha" placeholder="Ingrese la Fecha"> 
                        </div>
                     <div class="fila_2">
                        <div class="etiquetaUsuario"><p>Total</p></div>  
                        <input class="form-actualizar" type="text" name="Total" id="Total" placeholder="Ingrese el Total">  
                        <br>            
                        <button class="btn_actualizar" name="actualizar">Guardar Factura</button>
                     </div>
                
                  </div>
                   </form>
                
                <!-- END MODAL COMPRA -->
                </section>
 
            </div>
        </div>
     </div>
</div>
    <script src="usuario.js"></script>
</body>
</html>