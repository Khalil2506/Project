<?php
session_start();
if($_SESSION['idrol'] != 2){
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
    <title>Document</title>
</head>
<body>
 <div class="body">
 <?php include("headerUsuario.php");?>
     <div class="Mostrar_contenido">
     <div class="cont_titulo">
            <div class="dis_l">Productos</div> 
           <div class="dis_x"> <button class="btn-cerrar buttonDelete" type="button"><a href="../indexU.php" class="btn_cerrar_a">X</a></button></div>
        </div>
        <div class="contenidoUsuario">
            <ul class="columnasEditar">
                <li class="filaseditar filachild"><a href="NuevoproU.php" class="link_perfil">Nuevo Producto</a></li>
                <li class="filaseditar filafirst"><p class="firstEditar">Lista Producto</p></li>
                <li class="filaseditar filachild"><a href="eliminarproU.php" class="link_perfil">Eliminar Producto</a></li>
            </ul>
            <div class="contenidoUsuario_all">
           <!-- START SECTION SHOPPING CART -->
           <section class="ccn">
            <div class="container">
                <h1 class="text-center">Lista de Producto</h1>
                <hr>
                 <table class="tabla">
                    <thead >
                    <tr>
                        <th>Codigo</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Categoria</th>
                        <th>Tamaño</th>
                    </tr>
                    </thead>
                    <?php
                    include("../../login_BD.php");
                    $sql_registro = mysqli_query($conexion,"SELECT COUNT(*) as Total_registro From producto");
                    $result_registro = mysqli_fetch_array($sql_registro);
                    $total_registro = $result_registro['Total_registro'];
                    $por_pagina = 5;
                    if(empty($_GET['pagina'])){
                        $pagina = 1;
                    }else{
                        $pagina = $_GET['pagina'];
                    }
                    $desde = ($pagina-1)*$por_pagina;
                    $total_paginas = ceil($total_registro/$por_pagina);
                    $query = mysqli_query($conexion,"SELECT a.cod_pro,a.producto,a.precio,a.stock,c.categoria,p.tamaño,a.imagen from producto a INNER JOIN categoria c ON a.idcategoria=c.idcategoria INNER join porcion p on a.idporcion=p.idporcion ORDER BY cod_pro ASC LIMIT $desde,$por_pagina;");
                    $resultado = mysqli_num_rows($query);
                    if($resultado>0){
                        while ($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $data['cod_pro']?></td>
                                <td><?php echo $data['producto'] ?><img class="img_pro" height="50px" src="data:image/jpg;base64,<?php echo base64_encode($data['imagen']) ?>" alt="Pizza Paul"></td>
                                <td><?php echo $data['precio']?></td>
                                <td><?php echo $data['stock']?></td>
                                <td><?php echo $data['categoria']?></td>
                                <td><?php echo $data['tamaño']?></td>
                            </tr>
                            <?php
                        }
                    }
                   ?>
                 </table>
                 <div class="paginador">
                    <ul>
                        <?php
                        if($pagina !=1){
                        ?>
                        <li><a href="?pagina=<?php echo 1;?>">|<</a></li>
                        <li><a href="?pagina=<?php echo $pagina-1;?>"><<</a></li>
                        <?php 
                        }
                        for($i = 1;$i <=$total_paginas;$i++){
                            if($i == $pagina){
                                echo'<li class="pageselected">'.$i.'</li>';

                            }else{
                            echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
                        }
                        }
                        if($pagina!=$total_paginas){
                        ?>                        
                        <li><a href="?pagina=<?php echo $pagina+1;?>">>></a></li>
                        <li><a href="?pagina=<?php echo $total_paginas;?>">>|</a></li>
                        <?php }?>
                    </ul>
                 </div>
            </div>
        </section>
            </div>
        </div>
     </div>
</div>
    <script src="usuario.js"></script>
</body>
</html>