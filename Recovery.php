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
    <title>Document</title>
</head>
<body>
<?php include ("headerS.php");?>
        <!-- Pass recovery -->
        <div class="login">
            <div class="login_2"><form class="form">
               <div class="con">
               <header class="cabeza">
                  <h2>Restablecer Contraseña</h2>
                  <p>Si no recuerda su contraseña, intente recuperarla</p>
               </header>
               <div class="field-set">
                     <span class="input-item">
                       <i class="fa fa-user-circle"></i>
                     </span>
                     <input class="form-input" id="txt-input" type="text" placeholder="Usuario" required>
                  <br>
                  <span class="input-item">
                    <i class="fa fa-key"></i>
                   </span>
                  <button class="log-in"> Enviar correo de recuperacion </button>
               </div>
               <div class="otros">
                  <button class="recuperar_c"><a href="Register.html">Registrarte <i class="fa fa-user-plus" aria-hidden="true"></i> </a> 
                  </button>
               </div>
              </div>
            </form></div>
            </div> 
           <!--Pie de pagina--> 
           <?php include("footerS.php");?>
        <script src="responsive.js"></script>
        
</body>
</html>