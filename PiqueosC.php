<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f368768ce7.js" crossorigin="anonymous"></script>
    
    <link rel="icon" href="img/Logo.jpeg">
    <title>Nuestro Menú</title>
</head>
<body >
<?php include ("headerS.php");?>
<!-- MENU -->
    <div class="Producto">
    <div class="titulo">Nuestro Menu</div>
    <div class="contenidoUsuario">
            <ul class="columnasEditar">
                <li class="filaseditar filachild"><a href="Menu.php" class="link_perfil">Pizza</a></li>
                <li class="filaseditar filachild"><a href="PastaC.php" class="link_perfil">Pasta</a></li>
                <li class="filaseditar filafirst"><p class="firstEditar">Piqueos</p></li>
                <li class="filaseditar filachild"><a href="PlatosCriollosC.php" class="link_perfil">Platos Criollos</a></li>
                <li class="filaseditar filachild"><a href="BebidasC.php" class="link_perfil">Bebidas</a></li>
            </ul>
            <div class="contenidoUsuario_all">
            <div class="wrapper">
            <?php
      include("login_BD.php");
      $query = mysqli_query($conexion,"SELECT * FROM producto where idcategoria = 3;");
      $resultado = mysqli_num_rows($query);
      if($resultado>0){
        while ($data = mysqli_fetch_array($query)){
            ?>
       <div id="carta" class="item">
            <a href=""><img class="item-img" height="50px" src="data:image/jpg;base64,<?php echo base64_encode($data['imagen']) ?>" alt="Pizza Paul" width="15%"></a>
            <div class="cont_pro">    
            <h4 class="item-titulo"><?php echo $data['producto'] ?></h4>
                <p class="p"><?php echo $data['Descripcion'] ?></p>
                <p class="p"><b class="item-precio">Precio: S/<?php echo $data['precio']?>.00</b></p>
                </div>
                <form action="" method="post"><button name="btn_añadir" class="btn" value="agregar">Añadir al Carrito</button></form>          
        </div>
        <?php
                        }
                    }
                   ?>
            </div>
            <?php 
                if(isset($_POST['btn_añadir'])){
                  echo "<script> alert('Inicie Seccion para poder agregar productos al carrito');</script>";
                }
                ?>
        </div>
      </div> 
      </div>
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
   <!--<script src="estilos.js"></script>-->  
   <script src="responsive.js"></script>
</body>
</html>
