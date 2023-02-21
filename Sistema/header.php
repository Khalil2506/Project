   <?php
   session_start();
   if (empty($_SESSION['Active'])){
    header("location:../");
   }
   ?>
   <header class="encabezado">
        <div class="logo"><a href="indexU.php"><img src="../img/Logo2.png" alt="Paul pizzas" class="logo-img"></a></div>
        <ul class="nav">
            <li><a href="MenuU.php" class="nav_li">Nuestro Menu</a></li>
            <li><a href="PromocionesU.php" class="nav_li">PROMOCIONES</a></li>
            <li><a href="combosU.php" class="nav_li">COMBOS</a></li>
            <li><a href="NosotrosU.php" class="nav_li">Nosotros</a></li>     
        </ul> 
        <ul class="nav_responsive">
            <hr>
          <li><a href="MenuU.php" class="nav_li_responsive">NUESTRO MENU</a></li>
          <hr>
          <li><a href="PromocionesU.php" class="nav_li_responsive">PROMOCIONES</a></li>
          <hr>
          <li><a href="combosU.php" class="nav_li_responsive">COMBOS</a></li>
          <hr>
          <li><a href="NosotrosU.php" class="nav_li_responsive">Nosotros</a></li>   
          <hr>  
        
      </ul>   
      <div class="UsuarioLogin">
        <span class="btn_carrito">
            <a href="admin/MicarritoU.php"><i class="fa-solid fa-cart-shopping"><sup> <?php echo(empty($_SESSION['carrito']))?0:count($_SESSION['carrito']); ?></sup></i></a> 
           </span>
       <div class="Usuario">
        <div class="name"><?php echo $_SESSION['nombre'] ," ",$_SESSION['apellido']?></div>
        <span class="saldo">00 PEN</span>
        
       </div>
       <div class="imglogin">
       <img class="img_login" src="../img/login-login-icon-1281216.png" alt="Paul Pizza">
       </div>
       <div class="menuUsuario">
        <ul class="nav_Usuario">
          <li class="fa-solid fa-user"><a href="admin/UsuarioU.php?id=<?php echo$_SESSION['idUsuario']?>" class="nav_li_Usuario">Editar Perfil</a></li>
          <hr>
          <li class="fa-solid fa-cart-shopping"><a href="admin/MicarritoU.php?id=<?php echo$_SESSION['idUsuario']?>" class="nav_li_Usuario">Carrito</a></li>
          <hr>
          <li class="fa-solid fa-basket-shopping"><a href="admin/MiscomprasU.php?id=<?php echo$_SESSION['idUsuario']?>" class="nav_li_Usuario">Mis Compras</a></li>
          <hr>
          <li class="fa-solid fa-right-from-bracket Cerrar"><a href="salir.php" class="nav_li_Usuario ">Cerrar Sesion</a></li>   
      </div> 
    </div>
    <span class="btn_menu">
            <i class="fa fa-bars"></i>
        </span>
        
    </header>
