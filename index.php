<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f368768ce7.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/Logo.jpeg">
   
    <title>Paul Pizza</title>
</head>
<body>
        <?php include ("headerS.php");?>
    <!-- PUBLICIDAD -->
    <div class="delivery_home">
    <p class="delivery_home_p"> Delivery Gratis   |   Lunes a Jueves</p>
   </div>
    <div class="container_slider" >
        <div class="Slider" id="Slider">
            <div class="slider_session">
                <img src="img/slider1.jpeg" alt="pizza mozarela" width="100%" class="img1">
            </div>
            <div class="slider_session">
                <img src="img/slider6.jpg" alt="pizza peperoni" width="100%" class="img2" >
            </div>
            <div class="slider_session">
                <img src="img/slider4.jpeg" alt="pizza hawaina" width="100%" class="img3" >
            </div>
            <div class="slider_session">
                <img src="img/slider2.jpg " alt="pizza americana" width="100%"class="img4" >
            </div> 
        </div>
        <div class="Slider_btn Slider_btn-left" id="btn-left"><</div>
        <div class="Slider_btn Slider_btn-right" id="btn-right">></div>
    </div>
    <br>
    <div class="delivery_home">
    <p class="delivery_home_p"> Combos</p>
   </div>
    <script src="index.js"></script>
    <div class="wrapper combo1">
    <?php
      include("login_BD.php");
      $query = mysqli_query($conexion,"SELECT a.cod_pro,a.producto,a.Descripcion,a.precio,a.stock,c.categoria,p.tamaño,a.imagen from producto a INNER JOIN categoria c ON a.idcategoria=c.idcategoria INNER join porcion p on a.idporcion=p.idporcion WHERE categoria='Combo'  ");
      $resultado = mysqli_num_rows($query);
      if($resultado>0){
        while ($data = mysqli_fetch_array($query)){
            ?>
         <div class="item_pro" id="carta">
                 
                 <h4  class="titulo_pro"><?php echo $data['producto'] ?></h4>
                 
                 <a href=""><img class="item-img" height="50px" src="data:image/jpg;base64,<?php echo base64_encode($data['imagen']) ?>" alt="Pizza Paul" width="15%"></a>
                 <div class="cont_pro_combo">
                   <p class="p_combo">&#8226;<?php echo $data['Descripcion'] ?></p>
                   <br>
                   <p class="p_combo">&#8226;Precio: S/<?php echo $data['precio']?>.00</p>
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
    <div class="iconos_comida">
        <nav>
            <div><a href="Menu.php" class="fas fa-pizza-slice icon4"></a><p>PIZZAS</p></div>
            <div><a href="BebidasC.php"  class="fas fa-bottle-water icon5"></a><P>BEBIDAS</P></div>
            <div><a href="PlatosCriollosC.php" class="fas fa-bowl-food icon6"></a><P>COMIDAS</P></div>
        </nav>
    </div>
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
        
     <!--Pie de pagina--> 
     <?php include("footerS.php");?>
        <script src="responsive.js"></script>
        <script src="index.js"></script>
      
</body>
</html>