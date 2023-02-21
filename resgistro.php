<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f368768ce7.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/Logo.jpeg">
    <title>Login</title>
</head>
<body>  
<?php include ("headerS.php");?>
    <!-- Login -->
    <div class="login">
        <div class="login_2">
          <form class="form" action="Registro_c.php" method="post">
           <div class="con">
           <header class="cabeza">
              <h2>REGISTRO USUARIO</h2>
              <p>Registre un usuario para poder ingresar al sistema</p>
           </header>
           <div class="field-set">
                 
             <input class="form-input registro" id="txt-input" name="Usuario" type="text" placeholder="Nombre de Usuario" autocomplete="off" required>
              <br>
              <input class="form-input registro" type="text" name="Nombres" id="nombres" placeholder="Ingrese su Nombre" autocomplete="off">
              <br>
              <input class="form-input registro" type="text" name="Apellidos" id="apellidos" placeholder="Ingrese su Apellido" autocomplete="off">
              <br>
              <input class="form-input registro" type="email" name="Correo" id="correo" placeholder="Ingrese su Correo" autocomplete="off">
               <br>
              <input class="form-input registro" type="password" placeholder="contraseña" id="pwd"  name="password" autocomplete="new-password" required>
          
              <br>
              <button class="button"class="log-in" name="registrar">Registrar</button>
           </div>
           
          </div>
        </form></div>
        </div> 
        <?php
    include("Registro_c.php");
    ?>
    <!--Pie de pagina--> 
    <?php include("footerS.php");?>
    <script src="responsive.js"></script>
</body>
</html>