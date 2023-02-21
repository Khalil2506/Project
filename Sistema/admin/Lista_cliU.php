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
    
    <link rel="icon" href="img/Logo.jpeg">
    <title>Lista Cliente</title>
</head>
<body>
 <div class="body">
   <?php include("headerUsuario.php")?>
     <div class="Mostrar_contenido">
     <div class="cont_titulo">
            <div class="dis_l">Lista Cliente</div> 
           <div class="dis_x"> <button class="btn-cerrar buttonDelete" type="button"><a href="../indexU.php" class="btn_cerrar_a">X</a></button></div>
        </div>
        <div class="contenidoUsuario">
            <ul class="columnasEditar">
                <li class="filaseditar filafirst"><p class="firstEditar">Lista de clientes</p></li>
            </ul>
            <div class="contenidoUsuario_all">
            <section class="ccn">
            <div class="container">
                <h1 class="text-center">Lista de Usuario</h1>
                <hr>
                 <table class="tabla">
                    <thead >
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>email</th>
                        <th>Usuario</th>
                        <th>rol</th>
                        <th>crud</th>
                    </tr>
                    </thead>
                    <?php
                    include("../../login_BD.php");
                    $sql_registro = mysqli_query($conexion,"SELECT COUNT(*) as Total_registro From usuario");
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
                    $query = mysqli_query($conexion,"SELECT * FROM usuario LIMIT $desde,$por_pagina");
                    $resultado = mysqli_num_rows($query);
                    mysqli_close($conexion);
                    if($resultado>0){
                        while ($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $data['idUsuario']?></td>
                                <td><?php echo $data['nombre'] ?></td>
                                <td><?php echo $data['apellido']?></td>
                                <td><?php echo $data['email']?></td>
                                <td><?php echo $data['Usuario']?></td>
                                <td><?php echo $data['idrol']?></td>
                                <td><div class="col5 col-5">
                        <div class="shopping-cart-header produ ">
                            <h6 class="produ_eliminar">Eliminar</h6>
                        </div>
                    </div></td>
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