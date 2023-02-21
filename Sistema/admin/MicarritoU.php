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
    <title>Carrito</title>
</head>

<body>
    <div class="body">
        <?php include("headerUsuario.php") ?>
        <div class="Mostrar_contenido">
            <div class="cont_titulo">
                <div class="dis_l">Mi Carrito</div>
                <div class="dis_x"> <button class="btn-cerrar buttonDelete" type="button"><a href="../MenuU.php" class="btn_cerrar_a">X</a></button></div>
            </div>
            <div class="contenidoUsuario">
                <ul class="columnasEditar">
                    <li class="filaseditar filafirst">
                        <p class="firstEditar">Mi carrito</p>
                    </li>
                </ul>
                <div class="contenidoUsuario_all">
                    <!-- carrito -->
                    <!-- START SECTION SHOPPING CART -->
                    <section class="ccn">
                        <div class="container">
                            <h1 class="text-center">CARRITO</h1>
                            <?php if (!empty($_SESSION['carrito'])) { ?>
                                <hr>
                                <table class="tabla">
                                    <thead>
                                        <tr>
                                            <th>Nº</th>
                                            <th>Producto</th>
                                            <th>Imagen</th>
                                            <th>tamaño</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th colspan="2">Total</th>


                                        </tr>
                                    </thead>
                                    <?php $total = 0; ?>
                                    <?php
                                    include("confi.php");
                                    include("../carritoC.php");
                                    include("../../login_BD.php");
                                    ?>
                                    <?php

                                    foreach ($_SESSION['carrito'] as $indice => $producto) {
                                    ?>
                                        <tr>
                                            <td><?php echo $producto['id'] ?></td>
                                            <td><?php echo $producto['nombre'] ?></td>
                                            <td><img class="img_pro" height="80px" src="data:image/jpg;base64,<?php echo $producto['img'] ?>" alt="Pizza Paul"></td>
                                            <td><?php echo $producto['tamaño'] ?></td>
                                            <td>
                                                <form action="" method="post">
                                                    <input type="number" class="number" name="cantidad_act" onchange="this.form.submit();" value="<?php echo $producto['cantidad'] ?>">
                                                    <input type="hidden" name="nombre" value="<?php echo $producto['cod'] ?>">
                                                </form>
                                            </td>
                                            <td><?php echo $producto['precio'] ?></td>
                                            <td><?php echo number_format($producto['precio'] * $producto['cantidad'], 2) ?></td>

                                            <td>
                                                <form name="formulario" method="post" class="">
                                                    <input type="hidden" name="codigo" value="<?php echo $producto['id']; ?>">

                                                    <button name="btn_añadir1" class="btn" value="eliminar" type="submit">Eliminar</button>

                                                </form>
                                            </td>
                                        </tr>
                                        <?php $total = $total + ($producto['precio'] * $producto['cantidad']); ?>
                                    <?php
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="6" align="right">
                                            <h4>TOTAL</h4>
                                        </td>
                                        <td align="left" colspan="2">
                                            <h3><?php echo number_format($total, 2) ?></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="8" align="center">
                                            <form action="pagar.php" method="post">
                                                correo electronico: <input type="email" name="email" class="emailC" placeholder="Correo electronico" required>
                                                <button name="btn_añadir2" class="btn pago" value="enviar" type="submit">Proceder compra</button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            <?php } else { ?>
                            <?php echo '<h1 class="text-center alert">No hay nada en el carrito, seleccione un producto por favor.</h1>';
                            } ?>
                        </div>

                    </section>

                </div>
            </div>
        </div>
    </div>
    <script src="usuario.js"></script>
    <script src="../../estilos.js"></script>
</body>

</html>