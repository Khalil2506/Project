<?php
include("../../login_BD.php");
if(isset($_POST['actualizar'])){ 
    if (strlen($_POST['Nombres']) >= 1 && strlen($_POST['Apellidos']) >= 1 && strlen($_POST['Correo']) >= 1 ){ 
        $name = trim($_POST['Nombres']);
        $apellido= trim($_POST['Apellidos']);
        $email = trim($_POST['Correo']);
        $idUsuario = $_SESSION['idUsuario'];

        $consulta = "UPDATE usuario SET nombre='$name',apellido='$apellido',email='$email' WHERE idUsuario='$idUsuario'";
        $resultado = mysqli_query($conexion,$consulta);
        
        if($resultado){
            
             ?> 
             <script>alert('Actualizado correctamente, Inicie session nuevamente');</script>
             <?php
        } else{
            ?> 
            <script>alert('Ha ocurrido un error');</script>
            <?php
        }
    }      else{
        ?> 
        <script>alert('Completa los campos')</script>
        <?php
    }
}

?>