
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
          <form class="form" method="post">
           <div class="con">
           <header class="cabeza">
              <h2>Bienvenidos a Paul Pizzas</h2>
              <p>Inicie sesión aquí con su nombre de usuario y contraseña</p>
           </header>
           <div class="field-set">
                 <span class="input-item">
                   <i class="fa fa-user-circle"></i>
                 </span>
                 <input class="form-input" id="txt-input" type="text" name="Usuario_i" placeholder="Usuario" required>
              <br><br>
              <span class="input-item">
                <i class="fa fa-key"></i>
               </span>
              <input class="form-input" type="password" placeholder="contraseña" id="pwd"  name="password" required>
             <span class=".eye">
                <i class="fa fa-eye ojo" aria-hidden="true"  type="button" id="eye"></i>
             </span>
              <br>
              <button class="button"class="log-in" name="Ingresar"> Ingresar </button>
           </div>
           <div class="other">
              <button  class="btn-1 submits frgt-pass"><a href="Recovery.html">¿Olvidaste tu contraseña?</a></button>
              <button class="btn-2 submits sign-up"><a href="resgistro.php">Registrarte <i class="fa fa-user-plus" aria-hidden="true"></i> </a> 
              </button>
           </div>
          </div>
        </form></div>
        </div> 
        <?php
include("inicio.php");
    ?>
    <!--Pie de pagina--> 
    <?php include("footerS.php");?>
    
    <script>
        window.addEventListener('mouseover', initLandbot, { once: true });
        window.addEventListener('touchstart', initLandbot, { once: true });
        var myLandbot;
        function initLandbot() {
          if (!myLandbot) {
            var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
            s.addEventListener('load', function() {
              var myLandbot = new Landbot.Livechat({
                configUrl: 'https://chats.landbot.io/v3/H-1257374-O58HAL3EYPVO28OH/index.json',
              });
            });
            s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
          }
        }
        </script>
        <script src="login.js"></script>
</body>
</html>