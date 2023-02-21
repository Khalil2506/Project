<?php
session_start();
if ($_SESSION['idrol'] != 2) {
    header("location:UsuarioU.php");
}

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
    <title>Nuevo Producto</title>
</head>

<body>
    <div class="body">
        <?php include("headerUsuario.php") ?>
        <div class="Mostrar_contenido">
            <div class="cont_titulo">
                <div class="dis_l">Productos</div>
                <div class="dis_x"> <button class="btn-cerrar buttonDelete" type="button"><a href="../indexU.php" class="btn_cerrar_a">X</a></button></div>
            </div>
            <div class="contenidoUsuario">
                <ul class="columnasEditar">
                    <li class="filaseditar filafirst">
                        <p class="firstEditar">Nuevo Producto</p>
                    </li>
                    <li class="filaseditar filachild"><a href="ListaProU.php" class="link_perfil">Lista Producto</a></li>
                    <li class="filaseditar filachild"><a href="eliminarproU.php" class="link_perfil">Eliminar Producto</a></li>
                </ul>
                <div class="contenidoUsuario_all">
                    <section class="ccn">

                        <form action="" method="POST" class="formActualizar formInsertar" enctype="multipart/form-data">
                            <div class="DatosActualizar Insertarpro">
                                <div class="fila_1">
                                    <div class="etiquetaUsuario">
                                        <p>Nombre Producto</p>
                                    </div>
                                    <input class="form-actualizar" type="text" name="Producto" id="Producto" placeholder="Ingrese nombre Producto">
                                    <br>
                                    <div class="etiquetaUsuario">
                                        <p>Descripcion</p>
                                    </div>
                                    <input class="form-actualizar" type="text" name="Descripcion" id="Producto" placeholder="Ingrese la descripcion">
                                    <br>
                                    <div class="etiquetaUsuario">
                                        <p>Precio</p>
                                    </div>
                                    <input class="form-actualizar" type="number" name="Precio" id="Precio" placeholder="Ingrese Precio del Producto">
                                    <br>

                                </div>

                                <div class="fila_2">
                                    <div class="etiquetaUsuario">
                                        <p>Stock</p>
                                    </div>
                                    <input class="form-actualizar" type="number" name="Stock" id="Stock" placeholder="Ingrese el Stock">
                                    <div class="etiquetaUsuario">
                                        <p>Categoria</p>
                                    </div>
                                    <?php
                                    include("../../login_BD.php");
                                    $query = mysqli_query($conexion, "SELECT * FROM categoria");
                                    mysqli_close($conexion);
                                    $resultado = mysqli_num_rows($query);

                                    ?>
                                    <select name="categoria" id="categoria" class="form-actualizar">
                                        <?php
                                        if ($resultado > 0) {
                                            while ($rol = mysqli_fetch_array($query)) {
                                        ?>
                                                <option value="<?php echo $rol['idcategoria'] ?>"><?php echo $rol['categoria'] ?></option>
                                        <?php
                                            }
                                        }

                                        ?>
                                    </select>
                                    <div class="etiquetaUsuario">
                                        <p>Tamaño</p>
                                    </div>
                                    <?php
                                    include("../../login_BD.php");
                                    $query1 = mysqli_query($conexion, "SELECT * FROM porcion");
                                    mysqli_close($conexion);
                                    $resultado1 = mysqli_num_rows($query1);

                                    ?>
                                    <select name="tamaño" id="tamaño" class="form-actualizar">
                                        <?php
                                        if ($resultado1 > 0) {
                                            while ($rol1 = mysqli_fetch_array($query1)) {
                                        ?>
                                                <option value="<?php echo $rol1['idporcion'] ?>"><?php echo $rol1['tamaño'] ?></option>
                                        <?php
                                            }
                                        }

                                        ?>
                                    </select>

                                    <br>
                                </div>

                                <div class="fila_3">
                                    <div class="">
                                        <label >Selecciona una imagen:</label>
                                        <input type="file" name="foto" id="image"  onchange="previewImage(event)">
                                        <br>
                                        <img id="preview" class="img_producto" src="#" alt="Vista previa de la imagen">
                                        <br>
                                    </div>
                                    <button class="btn_actualizar" name="GuardarPro">Guardar Producto</button>
                                </div>

                            </div>
                        </form>
                        <?php
                        include("InsertarPro.php");
                        ?>
                        <!-- END MODAL COMPRA -->
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script src="usuario.js"></script>
    <script>
        function previewImage(event) {
            var input = event.target;
            var preview = document.getElementById('preview');
            preview.style.display = 'block';
            var reader = new FileReader();
            reader.onload = function() {
                preview.src = reader.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    </script>
    <script src="Img.js"></script>
</body>

</html>