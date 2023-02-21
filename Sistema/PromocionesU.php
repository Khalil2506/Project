<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f368768ce7.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/Logo.jpeg">
    <title>Promociones</title>
</head>
<body>
<?php include ("header.php");?>
        <!-- Promociones -->
        <div class="Combos">
            <div class="titulo">PROMOCIONES</div>
            <div class="wrapper promo">
            <?php
       include("admin/confi.php");
       include("conexionbd.php");
       include ("carritoC.php");
       $query = $conexion->prepare("SELECT a.cod_pro,a.producto,a.Descripcion,a.precio,a.stock,c.categoria,p.tamaño,a.imagen from producto a INNER JOIN categoria c ON a.idcategoria=c.idcategoria INNER join porcion p on a.idporcion=p.idporcion WHERE categoria='Promociones'");
       $query -> execute();
       $listaProducto = $query->fetchAll(PDO::FETCH_ASSOC);
       $num = $query->fetchColumn(PDO::FETCH_COLUMN);
        $aumento = 15;

       ?>
       <?php foreach($listaProducto as $data){?>
                <div class="item_pro" id="carta">
                 
                   <h4  class="titulo_pro"><?php echo $data['producto'] ?></h4>
                   
                   <a href=""><img class="item-img" height="50px" src="data:image/jpg;base64,<?php echo base64_encode($data['imagen']) ?>" alt="Pizza Paul" width="15%"></a>
                   <div class="cont_pro">
                     <p>&#8226;<?php echo $data['Descripcion'] ?></p>
                     <p>&#8226; Antes: S/. <?php echo number_format($data['precio']+$aumento) ?>.00</p>
                     <p>&#8226;Ahora: S/.<?php echo $data['precio']?>.00</p>
                    </div> 
                    <form name="formulario" method="post">
                <input type="hidden" name="codigo" value="<?php echo(empty($_SESSION['carrito']))?0:count($_SESSION['carrito']); ?>">
                <input type="hidden" name="cod_pro" value="<?php echo $data['cod_pro']?>">
                <input type="Hidden" name="tamaño" value="<?php echo $data['tamaño']?>">
            <input type="hidden" name="precio" value="<?php echo $data['precio']?>">
            <input type="hidden" name="titulo" value="<?php echo $data['producto']?>">
            <input type="hidden" name="cantidad" value="<?php echo 1?>">
            <button name="btn_añadir" class="btn" value="agregar">Añadir al Carrito</button>
             
                 </form> 
             </div>
           
        <?php
                      
                      }

                    
                   ?>
           </div>
        </div>
        <!--Pie de pagina--> 
        <?php include("footer.php");?>
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
        <script src="../responsive.js"></script>
</body>
</html>