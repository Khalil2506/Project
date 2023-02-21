<?php
session_start();
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
    
    <link rel="icon" href="../../img/Logo.jpeg">
    <title>Usuario</title>
</head>
<body>
 <div class="body">
     <?php include("headerUsuario.php")?>
     <div class="Mostrar_contenido">
        
     <div class="cont_titulo">
            <div class="dis_l">Mi perfil</div> 
           <div class="dis_x"> <button class="btn-cerrar buttonDelete" type="button"><a href="../indexU.php" class="btn_cerrar_a">X</a></button></div>
        </div>
        
        <div class="contenidoUsuario">
            <ul class="columnasEditar">
                <li class="filaseditar filafirst"><p class="firstEditar">Editar perfil</p> </li>
                <li class="filaseditar filachild"><a href="contraseñaU.php" class="link_perfil">Cambiar contraseña</a></li>
            </ul>
            <div class="contenidoUsuario_all">
               <form action="" method="POST" class="formActualizar">
                <div class="DatosActualizar">
                  <div class="etiquetaUsuario"><p>Nombres</p></div>  
                 <input class="form-actualizar" type="text" name="Nombres" id="nombres" placeholder="<?php echo $_SESSION['nombre']?>">
                 
                 <div class="etiquetaUsuario"><p>Apellidos</p></div>  
                 <input class="form-actualizar" type="text" name="Apellidos" id="apellidos" placeholder="<?php echo $_SESSION['apellido']?>">
                 
                 <div class="etiquetaUsuario"><p>Email</p></div>  
                 <input class="form-actualizar" type="email" name="Correo" id="correo" placeholder="<?php echo$_SESSION['email']?>">             
                 <button class="btn_actualizar" name="actualizar">Guardar Perfil</button>
              </div>
               </form>
            </div>
            <?php
         include("actualizar.php");
    ?>
        </div>
       
     </div>
</div>
    <script src="usuario.js"></script>
</body>
</html>