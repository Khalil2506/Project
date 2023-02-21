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
    <title>Actualizar Contraseña</title>
</head>
<body>
 <div class="body">
 <?php include("headerUsuario.php")?>
     <div class="Mostrar_contenido">
     <div class="cont_titulo">
            <div class="dis_l">Cambiar Contraseña</div> 
           <div class="dis_x"> <button class="btn-cerrar buttonDelete" type="button"><a href="../indexU.php" class="btn_cerrar_a">X</a></button></div>
        </div>
        <div class="contenidoUsuario">
            <ul class="columnasEditar">
                <li class="filaseditar filachild"><a href="UsuarioU.php" class="link_perfil">Editar perfil</a> </li>
                <li class="filaseditar filafirst"><p class="firstEditar">Cambiar contraseña</p></li>
            </ul>
            <div class="contenidoUsuario_all">
               <form action="" method="POST" class="formActualizar">
                <div class="DatosActualizar">
                  <div class="etiquetaUsuario"><p>Contraseña actual:</p></div>
                  <div class="input_contraseña">
                  <span class="icon_eye eye1"><i class="fa fa-eye visualizarC" id="eye"></i></span>
                    <input class="form-cambiar" type="password" name="pasnow" id="pwd" >
                  </div>  
                  <br>
                 <div class="etiquetaUsuario"><p>Nueva Contraseña:</p></div> 
                 <div class="input_contraseña">
                 <span class="icon_eye eye2"><i class="fa fa-eye visualizarC" id="eye"></i></span>
                    <input class="form-cambiar" type="password" name="pasnew" id="pwd" >
                 </div>   
                 <br>   
                 <div class="etiquetaUsuario"><p>Confirmar nueva contraseña:</p></div>  
                 <div class="input_contraseña">
                 <span class="icon_eye eye3"><i class="fa fa-eye visualizarC" id="eye"></i></span>
                    <input class="form-cambiar " type="password" name="pasnew1" id="pwd">
                </div>            
                 <button class="btn_actualizar btn_cambiar" name="actua_con">Guardar contraseña</button>
              </div>
               </form>
            </div>
            <?php
         include("actuacontra.php");
    ?>
        </div>
     </div>
</div>
    <script src="contra.js"></script>
    <script src="usuario.js"></script>
</body>
</html>