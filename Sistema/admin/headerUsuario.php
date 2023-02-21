<?php
   
   if (empty($_SESSION['Active'])){
    header("location:../");
   }
   ?>
<div class="Perfil">
       <div class="Usuario">
        <img src="login.png" alt="" class="img">
        <div class="listaUsuario">
            <p class="user us"><?php echo $_SESSION['Usuario']?></p>
              <p class="user id"><?php echo$_SESSION['email']?></p>
              <div class="Datos">
                <p class="user user_nombre"><?php echo $_SESSION['nombre']?> </p>
                <p class="user user_apellido"><?php echo $_SESSION['apellido']?></p>
              </div>
        </div>        
        </div>
        <ul class="Lista_admin">
            <li class="lista_li"><div class="link btn_perfil"><div class="con_lista"><i class="fa-solid fa-user"></i>Mi perfil</div> <div class="cont_img"><img src="flecha.png" alt="" class="img_flecha img_flechaperfil"></div></div> 
                <ul class="lista_ul perfil">
                    <li class="lista_lis"><a class="link ocu" href="UsuarioU.php"> Editar Perfil</a></li>
                    <li class="lista_lis"><a class="link ocu" href="contraseñaU.php">Cambiar contraseña</a> </li>
                </ul>
            </li>
            <li class="lista_li"><div class="link btn_carro" ><div class="con_lista"><i class="fa-solid fa-cart-shopping"></i>Mi carrito</div><div class="cont_img"><img src="flecha.png" alt="" class="img_flecha img_flechacarro" ></div></div> 
                <ul class="lista_ul carrito">
                    <li class="lista_lis"><a class="link ocu" href="MicarritoU.php">Mi carrito</a> </li>
                </ul>
            </li>
            <li class="lista_li"><div class="link btn_compraA" ><div class="con_lista"><i class="fa-solid fa-basket-shopping"></i>Mis compras</div><div class="cont_img"><img src="flecha.png" alt="" class="img_flecha img_flechacompras" ></div></div> 
                <ul class="lista_ul compras">
                    <li class="lista_lis"><a class="link ocu" href="MiscomprasU.php">Mis compras</a> </li>
                </ul>
            </li>
            <?php
              if($_SESSION['idrol'] == 2){
              ?>
            <li class="lista_li"><div class="link btn_productosA" ><div class="con_lista"><i class="fa-brands fa-product-hunt"></i>Productos</div><div class="cont_img"><img src="flecha.png" alt="" class="img_flecha img_flechaproductos" ></div></div> 
                <ul class="lista_ul producto">
                    <li class="lista_lis"><a class="link ocu" href="NuevoproU.php">Nuevo Productos</a> </li>
                    <li class="lista_lis"><a class="link ocu" href="ListaProU.php">Lista de productos</a></li>
                    <li class="lista_lis"><a class="link ocu" href="eliminarproU.php">Eliminar producto</a> </li>
                </ul>
            </li>
            <li class="lista_li"><div class="link btn_facturas" ><div class="con_lista"><i class="fa-solid fa-file-invoice"></i>Facturas</div><div class="cont_img"><img src="flecha.png" alt="" class="img_flecha img_flechafacturas" ></div></div> 
                <ul class="lista_ul factura">
                    <li class="lista_lis"><a class="link ocu" href="Consultarfac.php">Consultar facturas</a> </li>
                    <li class="lista_lis"><a class="link ocu" href="InsertarFacU.php">Insertar facturas</a> </li>
                </ul>
            </li>
            <li class="lista_li"><div class="link btn_cliente" > <div class="con_lista"><i class="fa-solid fa-person"></i>clientes</div><div class="cont_img"><img src="flecha.png" alt="" class="img_flecha img_flechaclientes" ></div></div>
                <ul class="lista_ul cliente">
                    <li class="lista_lis"><a class="link ocu" href="Lista_cliU.php">Lista de clientes</a></li>
                </ul>
            </li>
            <?php
              }
            ?>
        </ul>
     </div>