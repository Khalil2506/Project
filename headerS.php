<?php
   session_start();
   if (!empty($_SESSION['Active'])){
    header("location:Sistema/indexU.php");
   }
   ?>
<header class="encabezado">
      <nav class="encabezado">
      <div class="logo">
          <a href="index.php"><img src="img/Logo2.png" alt="Paul pizzas" class="logo-img"></a>
      </div>
      <ul class="nav">
          <li><a href="Menu.php" class="nav_li">Nuestro Menú</a></li>
          <li><a href="Promociones.php" class="nav_li">PROMOCIONES</a></li>
          <li><a href="Combos.php" class="nav_li">COMBOS</a></li>
          <li><a href="Nosotros.php" class="nav_li">NOSOTROS</a></li>     
      </ul> 
      <ul class="nav_responsive">
          <hr>
        <li><a href="Menu.php" class="nav_li_responsive">NUESTRO MENU</a></li>
        <hr>
        <li><a href="Promociones.php" class="nav_li_responsive">PROMOCIONES</a></li>
        <hr>
        <li><a href="Combos.php" class="nav_li_responsive">COMBOS</a></li>
        <hr>
        <li><a href="Nosotros.php" class="nav_li_responsive">NOSOTROS</a></li>   
        <hr>  
        
    </ul> 
   
       <div class="login_enc">
        <span class="btn_carrito">
        <a href="#"><i class="fa-solid fa-cart-shopping"><sup> <?php echo(empty($_SESSION['carrito']))?0:count($_SESSION['carrito']); ?></sup></i></a> 
           </span>
       <div class="Ingresar_e">
        <a href="login.php"><span class="btn_ingresar">Ingresar</span></a>
        
       </div>
       <div class="registrar_e">
        <a href="resgistro.php"><span class="btn_registrar">Registrar</span></a>
       </div>
    </div>
    <span class="btn_menu">
          <i class="fa fa-bars"></i>
      </span>
    
  </header>